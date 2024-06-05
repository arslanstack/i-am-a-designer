<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Project;
use App\Models\ProjectSave;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $projects = Project::where('status', 1)->inRandomOrder()->limit(8)->get();
        $featured_projects = Project::where('status', 1)->where('is_featured', 1)->inRandomOrder()->limit(11)->get();
        return view('clientviews.pages.landing', compact('projects', 'featured_projects'));
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
        // all projects except the current project
        $related_projects = Project::where('designer_id', $designer->id)->where('id', '!=', $project->id)->inRandomOrder()->limit(3)->get();
        return view('clientviews.pages.project', compact(['designer', 'project', 'related_projects']));
    }

    public function increment_viewcount(Request $request)
    {
        $designer = Designer::where('username', $request->username)->first();
        $designer->view_count += 1;
        $designer->save();
        return response()->json(['success' => 'count incremented']);
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

    public function contactMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();

        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $subject = 'A new contact request from I Am A Designer';
        $emailTemplate = view('emails.contact', compact(['data']))->render();
        $verification = mail("calebjanaltair@gmail.com", $subject, $emailTemplate, $headers);

        if ($verification) {
            return response()->json(['status' => 'success', 'msg' => 'Message sent successfully']);
        } else {
            return response()->json(['status' => 'error', 'msg' => 'Something Went Wrong']);
        }
    }

    public function saveProject(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        $deisgner = Designer::where('id', $project->designer_id)->first();
        $user = auth()->user();

        $save = new ProjectSave();
        $save->user_id = $user->id;
        $save->designer_id = $deisgner->id;
        $save->project_id = $project->id;
        $save->save();

        return response()->json(['status' => 'success', 'msg' => 'Project saved successfully']);
    }
}
