<?php

namespace App\Http\Controllers\Front\Investment;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(2);
        return view('front.investment.index', compact('page'));
    }
}
