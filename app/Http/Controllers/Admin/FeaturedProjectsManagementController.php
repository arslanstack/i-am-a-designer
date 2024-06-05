<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class FeaturedProjectsManagementController extends Controller
{
    public function index(Request $request)
    {
        $data['projects'] = Project::where('is_featured', 1)->orderBy('id', 'DESC')->paginate(50);
        return view('admin/featured_projects/manage_projects', $data);
    }
}
