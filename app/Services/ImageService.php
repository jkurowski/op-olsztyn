<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as ImageManager;

class ImageService
{
    public function upload(UploadedFile $file, object $model, bool $delete = false)
    {
        try {
            if ($delete) {
                $this->deleteFiles($model);
            }

            $name_file = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $name = date('His') . '_' . Str::slug($name_file) . '.' . $file->getClientOriginalExtension();
            $name_webp = date('His') . '_' . Str::slug($name_file) . '.webp';

            $file->storeAs('gallery/images/', $name, 'public_uploads');

            $filepath = public_path('uploads/gallery/images/' . $name);
            $filepath_webp = public_path('uploads/gallery/images/webp/' . $name_webp);

            $thumb_filepath = public_path('uploads/gallery/images/thumbs/' . $name);
            $thumb_filepath_webp = public_path('uploads/gallery/images/thumbs/webp/' . $name_webp);

            if (!$this->checkFile($filepath)) {
                throw new \Exception('Original file is missing or not readable.');
            }

            ImageManager::make($filepath)
                ->resize(
                    config('images.gallery.big_width'),
                    config('images.gallery.big_height'),
                    function ($constraint) {
                        $constraint->aspectRatio();
                    }
                )->save($filepath);

            if (!$this->checkFile($filepath_webp)) {
                throw new \Exception('Failed to create webp file.');
            }

            ImageManager::make($filepath)->encode('webp', 90)->save($filepath_webp);

            ImageManager::make($filepath)
                ->fit(
                    config('images.gallery.thumb_width'),
                    config('images.gallery.thumb_height')
                )->save($thumb_filepath);

            if (!$this->checkFile($thumb_filepath)) {
                throw new \Exception('Failed to create thumbnail.');
            }

            ImageManager::make($thumb_filepath)->encode('webp', 90)->save($thumb_filepath_webp);

            $model->update([
                'file' => $name,
                'file_webp' => $name_webp,
                'name' => $file->getClientOriginalName()
            ]);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            // For demonstration purposes, rethrowing the exception
            throw $e;
        }
    }

    private function deleteFiles($model)
    {
        if (File::isFile(public_path('uploads/gallery/images/' . $model->file))) {
            File::delete(public_path('uploads/gallery/images/' . $model->file));
        }
        if (File::isFile(public_path('uploads/gallery/images/webp/' . $model->file_webp))) {
            File::delete(public_path('uploads/gallery/images/webp/' . $model->file_webp));
        }

        if (File::isFile(public_path('uploads/gallery/images/thumbs/' . $model->file))) {
            File::delete(public_path('uploads/gallery/images/thumbs/' . $model->file));
        }
        if (File::isFile(public_path('uploads/gallery/images/thumbs/webp/' . $model->file_webp))) {
            File::delete(public_path('uploads/gallery/images/thumbs/webp/' . $model->file_webp));
        }
    }

    private function checkFile($path)
    {
        return File::exists($path) && File::isReadable($path);
    }
}
