<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    protected $guard = 'designer';

    public function __construct()
    {
        $this->middleware('auth:designer');
    }

    public function showProjects()
    {
        $designer = Auth::guard('designer')->user();
        $projects = $designer->projects()->orderBy('id', 'desc')->get();
        return view('designer.pages.projects', compact('designer', 'projects'));
    }
    public function showProjectForm()
    {
        $designer = Auth::guard('designer')->user();
        return view('designer.pages.add-project', compact('designer'));
    }
    public function showOneProject($slug)
    {
        // dd($slug);
        $designer = Auth::guard('designer')->user();
        $project = Project::where('slug', $slug)->first();
        return view('designer.pages.project-details', compact('designer', 'project'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'description' => 'required|string',
            'banner' => 'required|image',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please fill all the required fields and title should be less than 255 characters');
        }
        $slug = strtolower(str_replace(' ', '-', $request->title)) . '-' . time();
        $designer = Auth::guard('designer')->user();
        $project = new Project();
        $project->title = $request->title;
        $project->subtitle = $request->subtitle;
        $project->description = $request->description;
        $project->designer_id = $designer->id;
        $project->slug = $slug;
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileName = 'banner-' . $slug . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $fileName);
            $project->banner = $fileName;
        }
        $query = $project->save();
        if ($query) {
            return redirect()->route('designer.projects')->with('success', 'Project added successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add project');
        }
    }
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'description' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please fill all the required fields and title should be less than 255 characters');
        }
        $project = Project::find($request->id);
        $project->title = $request->title;
        $project->subtitle = $request->subtitle;
        $project->description = $request->description;
        $slug = strtolower(str_replace(' ', '-', $request->title)) . '-' . time();
        $project->slug = $slug;

        if ($request->hasFile('banner')) {
            if (file_exists(public_path('uploads/projects/' . $project->banner))) {
                unlink(public_path('uploads/projects/' . $project->banner));
            }
            $file = $request->file('banner');
            $fileName = 'banner-' . $slug . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $fileName);
            $project->banner = $fileName;
        }
        $query = $project->save();
        if ($query) {
            return redirect()->route('designer.projects')->with('success', 'Project updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update project');
        }
    }
    public function publish($id)
    {
        $project = Project::find($id);
        $project->is_published = 1;
        $query = $project->save();
        if ($query) {
            return response()->json(['success' => 'Project published successfully']);
        } else {
            return response()->json(['error' => 'Failed to publish project']);
        }
    }

    public function unpublish($id)
    {
        $project = Project::find($id);
        $project->is_published = 0;
        $query = $project->save();
        if ($query) {
            return response()->json(['success' => 'Project published successfully']);
        } else {
            return response()->json(['error' => 'Failed to publish project']);
        }
    }

    public function delete($id)
    {
        $project = Project::find($id);
        foreach (json_decode($project->images) as $image) {
            if (file_exists(public_path('uploads/projects/' . $image))) {
                unlink(public_path('uploads/projects/' . $image));
            }
        }
        foreach (json_decode($project->videos) as $video) {
            if (file_exists(public_path('uploads/projects/' . $video))) {
                unlink(public_path('uploads/projects/' . $video));
            }
        }
        if (file_exists(public_path('uploads/projects/' . $project->banner))) {
            unlink(public_path('uploads/projects/' . $project->banner));
        }
        $query = $project->delete();
        if ($query) {
            return response()->json(['success' => 'Project deleted successfully']);
        } else {
            return response()->json(['error' => 'Failed to delete project']);
        }
    }
}
