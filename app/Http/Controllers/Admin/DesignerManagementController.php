<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Designer::query();
        $search_query = $request->input('search_query');
        if ($request->has('search_query') && !empty($search_query)) {
            $query->where(function ($query) use ($search_query) {
                $query->where('name', 'like', '%' . $search_query . '%')
                    ->orWhere('username', 'like', '%' . $search_query . '%')
                    ->orWhere('email', 'like', '%' . $search_query . '%');
            });
        }
        $data['designers'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['searchParams'] = $request->all();
        return view('admin/designers/manage_designers', $data);
    }

    public function designer_details($id)
    {
        $designer = Designer::where('id', $id)->first();
        if (!empty($designer)) {
            // projects of the designer
            $projects = $designer->projects()->orderBy('id', 'DESC')->get();
            return view('admin/designers/designers_details', compact('designer', 'projects'));
        }

        return view('common/admin_404');
    }

    public function update_statuses(Request $request)
    {
        $data = $request->all();
        $status = Designer::where('id', $data['id'])->update([
            'status' => $data['status'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        if ($status > 0) {
            if ($data['status'] == '0') {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Designer Deactivated successfully.']);
            } else {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'Designer Activated successfully.']);
            }
            return $finalResult;
        } else {
            $finalResult = response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            return $finalResult;
        }
    }
}
