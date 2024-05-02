<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Project;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $projects = Project::inRandomOrder()->limit(11)->get();
        foreach ($projects as $project) {
            $project->designer = Designer::find($project->designer_id);
        }
        return view('clientviews.pages.landing', compact('projects'));
    }

    public function designers()
    {
        $designers = Designer::inRandomOrder()->limit(12)->get();
        return view('clientviews.pages.designers', compact('designers'));
    }
    public function designerSearch(Request $request)
    {
        $name = $request->designer_name;
        $designers = Designer::where('name', 'like', '%' . $name . '%')->get();
        return view('clientviews.pages.designers', compact(['designers', 'name']));
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
        $designer = Designer::where('username', $username)->first();
        $projects = $designer->projects;
        return view('clientviews.pages.designer_profile', compact(['designer', 'projects']));
    }
    public function project($username, $slug)
    {
        $designer = Designer::where('username', $username)->first();
        $project = Project::where('slug', $slug)->first();
        return view('clientviews.pages.project', compact(['designer', 'project']));
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
