<?php

namespace App\Http\Controllers;

use App\Http\Repositories\HomepageRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHomepage()
    {
        $content = HomepageRepository::getHomepageContent();
        $socials = HomepageRepository::getSocial();
        $localTime = HomepageRepository::getLocalTime();

        return view('homepage', compact('content', 'socials', 'localTime'));
    }

    public function getPageAbout()
    {
        $content = HomepageRepository::getHomepageContent();
        $socials = HomepageRepository::getSocial();
        $localTime = HomepageRepository::getLocalTime();

        return view('about', compact('content', 'socials', 'localTime'));
    }

    public function getPageWork()
    {
        $content = HomepageRepository::getHomepageContent();
        $socials = HomepageRepository::getSocial();
        $localTime = HomepageRepository::getLocalTime();
        
        return view('work', compact('content', 'socials', 'localTime'));
    }
}
