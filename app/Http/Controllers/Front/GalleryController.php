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
        $page = Page::where('id', 11)->first();
        $galeries = Gallery::all();
        return view('front.gallery.index', [
            'page' => $page,
            'galeries' => $galeries
        ]);
    }
}
