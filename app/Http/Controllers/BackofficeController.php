<?php

namespace App\Http\Controllers;

class BackofficeController extends Controller
{
    public function getDashboard()
    {
        return view('backoffice.dashboard');
    }
    public function getHomepage()
    {
        return view('backoffice.homepage');
    }
    public function getProjects()
    {
        return view('backoffice.projects');
    }
    public function getWorks()
    {
        return view('backoffice.works');
    }
    public function getAbout()
    {
        return view('backoffice.about');
    }
}
