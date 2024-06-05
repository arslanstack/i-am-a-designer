<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
        $search_query = $request->input('search_query');
        if ($request->has('search_query') && !empty($search_query)) {
            $query->where(function ($query) use ($search_query) {
                $query->where('name', 'like', '%' . $search_query . '%')
                    ->orWhere('email', 'like', '%' . $search_query . '%');
            });
        }
        $data['users'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['searchParams'] = $request->all();
        return view('admin/users/manage_users', $data);
    }

    public function user_details($id)
    {
        $data['user'] = User::where('id', $id)->first();
        if (!empty($data['user'])) {
            return view('admin/users/users_details', $data);
        }

        return view('common/admin_404');
    }

    public function update_statuses(Request $request)
    {
        $data = $request->all();
        $status = User::where('id', $data['id'])->update([
            'status' => $data['status'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        if ($status > 0) {
            if ($data['status'] == '0') {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'User Deactivated successfully.']);
            } else {
                $finalResult = response()->json(['msg' => 'success', 'response' => 'User Activated successfully.']);
            }
            return $finalResult;
        } else {
            $finalResult = response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            return $finalResult;
        }
    }
}
