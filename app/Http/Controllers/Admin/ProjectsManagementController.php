<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();
        $search_query = $request->input('search_query');
        if ($request->has('search_query') && !empty($search_query)) {
            $designer = Designer::where('username', 'like', '%' . $search_query . '%')->first();
            if ($designer) {
                $query->where('designer_id', $designer->id);
            } else {
                $query->where(function ($query) use ($search_query) {
                    $query->where('title', 'like', '%' . $search_query . '%');
                });
            }
        }
        $data['projects'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['searchParams'] = $request->all();
        return view('admin/projects/manage_projects', $data);
    }

    public function project_details($id)
    {
        $project = Project::where('id', $id)->first();
        if (!empty($project)) {
            // projects of the designer
            $designer = $project->designer;
            $works = $designer->projects()->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(5)->get();
            return view('admin/projects/projects_details', compact('project', 'designer', 'works'));
        }

        return view('common/admin_404');
    }

    public function update_statuses(Request $request)
    {
        $data = $request->all();
        $status = Project::where('id', $data['id'])->update([
            'status' => $data['status'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        if ($status > 0) {
            if ($data['status'] == '0') {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Project Deactivated successfully.']);
            } else {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Project Activated successfully.']);
            }
            return $finalResult;
        } else {
            $finalResult = response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            return $finalResult;
        }
    }

    public function update_featured(Request $request)
    {
        $data = $request->all();
        $featured = Project::where('id', $data['id'])->update([
            'is_featured' => $data['featured'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        if ($featured > 0) {
            if ($data['featured'] == '0') {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Project Unfeatured successfully.']);
            } else {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Project Featured successfully.']);
            }
            return $finalResult;
        } else {
            $finalResult = response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            return $finalResult;
        }
    }
}
