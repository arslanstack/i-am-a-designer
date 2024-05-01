<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
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

    public function home()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->guard('designer')->check()) {
            return redirect()->route('designer.dashboard');
        } elseif (auth()->guard('web')->check()) {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('user.login');
        }
    }
}
