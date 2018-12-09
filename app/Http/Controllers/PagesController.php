<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function snippets()
    {
    	return view('frontend.pages.snippets');
    }

    public function packages()
    {
    	return view('frontend.pages.packages');
    }

    public function tutorials()
    {
    	return view('frontend.pages.tutorials');
    }
}
