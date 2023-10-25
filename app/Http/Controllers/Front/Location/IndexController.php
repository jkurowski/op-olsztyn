<?php

namespace App\Http\Controllers\Front\Location;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(4);
        return view('front.location.index', compact('page'));
    }
}
