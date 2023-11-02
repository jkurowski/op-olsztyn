<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Gallery;
use App\Models\Page;

class GalleryController extends Controller
{

    public function index()
    {
        $page = Page::where('id', 3)->first();
        return view('front.gallery.index', [
            'page' => $page
        ]);
    }
}
