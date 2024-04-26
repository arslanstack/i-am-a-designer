<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('clientviews.pages.landing');
    }

    public function designers()
    {
        return view('clientviews.pages.designers');
    }
    public function login()
    {
        return view('clientviews.pages.login');
    }
    public function register()
    {
        return view('clientviews.pages.register');
    }
    public function about()
    {
        return view('clientviews.pages.about');
    }
    public function contact()
    {
        return view('clientviews.pages.contact');
    }
    public function privacy()
    {
        return view('clientviews.pages.privacy');
    }
    public function designer_profile($username)
    {
        return view('clientviews.pages.designer_profile');
    }
    public function project($username, $project_id)
    {
        return view('clientviews.pages.project');
    }
}
