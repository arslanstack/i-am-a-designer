<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserGeneralController extends Controller
{
    protected $guard = 'web';

    public function __construct()
    {
        $this->middleware('auth:web')->except(['verify']);
    }

    public function index()
    {
        return view('clientviews.pages.dashboard');
    }
    public function resendVerifyMail()
    {
        $user = Auth::user();
        $verification_url = route('user.verify', $user->verification_token);
        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $subject = 'Please verify your email address';
        $emailTemplate = view('emails.user_verify', compact(['user', 'verification_url']))->render();
        $verification = mail($user->email, $subject, $emailTemplate, $headers);
        if ($verification) {
            return response()->json(['success' => 'Verification email sent successfully. Please check your email.'], 200);
        } else {
            return  response()->json(['error' => 'Failed to send verification email. Please try again.'], 500);
        }
    }

    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();
            if (Auth::guard('web')->check()) {
                return redirect()->route('user.dashboard')->with('success', 'Email verified successfully.');
            } else {
                return redirect()->route('user.login')->with('success', 'Email verified successfully. Please login to continue.');
            }
        } else {
            return redirect()->route('user.login')->with('error', 'Invalid verification token.');
        }
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('clientviews.pages.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields',
                'errors' => $validator->errors()->first(),
            ], 422);
        }

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city ?? null;
        $user->country = $request->country ?? null;

        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/users/images'), $imageName);
            $user->image = $imageName;
        }
        $query = $user->save();

        if ($query) {
            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update profile. Please try again.',
            ]);
        }
    }

    public function showsecurity()
    {
        return view('clientviews.pages.security');
    }

    public function changePswd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            $errorList = '';
            foreach ($validator->errors()->all() as $message) {
                $errorList .= $message . '<br>';
            }
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields',
                'errors' => $errorList,
            ], 400);
        }

        $user = Auth::guard('web')->user();

        if (password_verify($request->old_password, $user->password)) {
            $user->password = bcrypt($request->password);
            $query = $user->save();
            if ($query) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to change password. Please try again.',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Old password is incorrect',
            ]);
        }
    }
}
