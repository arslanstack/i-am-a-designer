<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AdminGeneralController extends Controller
{
    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function showChangePswd()
    {
        return view('admin.change_password');
    }
    public function updatePswd(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            [
                'old_password' => 'required',
                'new_password' => 'required|min:6|different:old_password',
                'c_password' => 'required|same:new_password'
            ],
            [
                'c_password.required' => 'The confirm password field is required.',
                'c_password.same' => 'The confirm password must be same with new password.'
            ]
        );
        if ($validator->fails()) {
            $finalResult = response()->json(array('msg' => 'lvl_error', 'response' => $validator->errors()->all()));
            return $finalResult;
        }
        if (Hash::check($data['old_password'], Auth::guard('admin')->user()->password)) {
            try {
                $data_array = Admin::findOrFail(Auth::guard('admin')->user()->id);
                $data_array->password = Hash::make($data['new_password']);
                $data_array->save();
                $finalResult = response()->json(array('msg' => 'success', 'response' => 'Password successfully updated.'));
                return $finalResult;
            } catch (\Illuminate\Database\QueryException $ex) {
                $finalResult = response()->json(array('msg' => 'error', 'response' => $ex->getMessage()));
                return $finalResult;
            }
        } else {
            $finalResult = response()->json(array('msg' => 'error', 'response' => 'Your password is wrong.'));
            return $finalResult;
        }
    }
}
