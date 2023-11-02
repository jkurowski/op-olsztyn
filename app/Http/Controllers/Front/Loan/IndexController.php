<?php

namespace App\Http\Controllers\Front\Loan;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        return view('front.loan.index', compact('page'));
    }
}
