<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHomepage()
    {
        return view('homepage');
    }

    public function getPageAbout()
    {
        return view('about');
    }

    public function getPageWork()
    {
        return view('work');
    }
}
