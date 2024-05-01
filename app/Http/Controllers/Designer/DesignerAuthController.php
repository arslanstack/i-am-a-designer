<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Sessions;
use Illuminate\Support\Facades\Validator;
use App\Models\Designer;


class DesignerAuthController extends Controller
{
    protected $guard = 'designer';
    protected $redirectTo = '/designer/dashboard';

    public function __construct()
    {
        $this->middleware('guest:designer')->except(['logout']);
    }
    protected function guard()
    {
        return Auth::guard('designer');
    }

    public function showLogin()
    {
        return view('designer.auth.login');
    }

    public function verifyLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (Auth::guard('designer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('designer.dashboard'));
        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['password' => 'Invalid email or password']);
        }
    }

    public function logout()
    {
        Auth::guard('designer')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('designer.login');
    }

    public function showRegister()
    {
        return view('designer.auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:designers',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $username = strtolower(str_replace(' ', '', $request->name)) . rand(1000, 9999);
        $token = sha1(time()) . rand(1, 1000);
        $verification_url = route('designer.verify', $token);

        $designer = new Designer();
        $designer->name = $request->name;
        $designer->email = $request->email;
        $designer->username = $username;
        $designer->image = "avatar.png";
        $designer->cover_image = "cover.png";
        $designer->resume = "resume.png";
        $designer->password = Hash::make($request->password);
        $designer->verification_token = $token;
        $designer->save();

        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $subject = 'Please verify your email address';
        $emailTemplate = view('emails.designer_verify', compact(['designer', 'verification_url']))->render();
        $verification = mail($request->email, $subject, $emailTemplate, $headers);
        if ($verification) {
            $credentials = $request->only('email', 'password');
            $authenticate = Auth::guard('designer')->attempt($credentials);
            return redirect()->route('designer.dashboard');
        } else {
            return redirect()->back()->with('error', 'Sorry, we could not send the verification email. Please try again.');
        }
    }
    public function showReset()
    {
        return view('designer.auth.forgot');
    }
    public function resetMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please enter a valid email address.');
        }
        $designer = Designer::where('email', $request->email)->first();
        if ($designer) {
            $token = sha1(time()) . rand(1, 1000);
            $designer->remember_token = $token;
            $designer->save();

            $reset_url = route('designer.verifyLink', $token);
            $headers = "From: webmaster@example.com\r\n";
            $headers .= "Reply-To: webmaster@example.com\r\n";
            $headers .= "Content-Type: text/html\r\n";
            $subject = 'Reset Your Account Password';
            $emailTemplate = view('emails.designer_reset_password', compact(['designer', 'reset_url']))->render();
            $verification = mail($designer->email, $subject, $emailTemplate, $headers);
            if ($verification) {
                return redirect()->back()->with('success', 'We have sent you an email with the password reset link.');
            } else {
                return redirect()->back()->with('error', 'Sorry, we could not send the password reset email. Please try again.');
            }
        } else {
            return redirect()->back()->with('error', 'Sorry, we could not find any account with this email address.');
        }
    }
    public function verifyLink($token)
    {
        $designer = Designer::where('remember_token', $token)->first();
        if ($designer) {
            return view('designer.auth.reset', compact(['designer', 'token']));
        } else {
            return redirect()->route('designer.reset')->with('error', 'Sorry, The link is broken, please generate a new one.');
        }
    }
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please enter a password with minimum 6 characters and confirm it.');
        }

        if ($request->token == null || $request->token == '') {
            return redirect()->back()->with('error', 'Sorry, The link is broken, please genarte a new one.');
        }

        $designer = Designer::where('remember_token', $request->token)->first();

        if ($designer) {
            $designer->password = Hash::make($request->password);
            $designer->remember_token = null;
            $designer->save();
            return redirect()->route('designer.login')->with('success', 'Password reset successful. Please login with your new password.');
        } else {
            return redirect()->back()->with('error', 'Sorry, The link is broken, please genarte a new one.');
        }
    }
}
