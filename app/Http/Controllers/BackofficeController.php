<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Backoffice\HomepageRepository;
use Illuminate\Http\Request;

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

    public function changeInitialBanner(Request $request)
    {
        $dataImages = $request->all();
        
        return HomepageRepository::changeInitialBanner($dataImages);
    }
}
