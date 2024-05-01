<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Sessions;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserAuthController extends Controller
{
    protected $guard = 'web';
    protected $redirectTo = '/user/dashboard';

    public function __construct()
    {
        $this->middleware('guest:web')->except(['logout']);
    }
    protected function guard()
    {
        return Auth::guard('web');
    }

    public function showLogin()
    {
        return view('clientviews.auth.login');
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

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('user.dashboard'));
        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['password' => 'Invalid email or password']);
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('user.login');
    }

    public function showRegister()
    {
        return view('clientviews.auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $token = sha1(time()) . rand(1, 1000);
        $verification_url = route('user.verify', $token);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = "avatar.png";
        $user->password = Hash::make($request->password);
        $user->verification_token = $token;
        $user->save();

        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $subject = 'Please verify your email address';
        $emailTemplate = view('emails.user_verify', compact(['user', 'verification_url']))->render();
        $verification = mail($request->email, $subject, $emailTemplate, $headers);
        if ($verification) {
            $credentials = $request->only('email', 'password');
            $authenticate = Auth::guard('web')->attempt($credentials);
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->back()->with('error', 'Sorry, we could not send the verification email. Please try again.');
        }
    }
    public function showReset()
    {
        return view('clientviews.auth.forgot');
    }
    public function resetMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please enter a valid email address.');
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = sha1(time()) . rand(1, 1000);
            $user->remember_token = $token;
            $user->save();

            $reset_url = route('user.verifyLink', $token);
            $headers = "From: webmaster@example.com\r\n";
            $headers .= "Reply-To: webmaster@example.com\r\n";
            $headers .= "Content-Type: text/html\r\n";
            $subject = 'Reset Your Account Password';
            $emailTemplate = view('emails.user_reset_password', compact(['user', 'reset_url']))->render();
            $verification = mail($user->email, $subject, $emailTemplate, $headers);
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
        $user = User::where('remember_token', $token)->first();
        if ($user) {
            return view('clientviews.auth.reset', compact(['user', 'token']));
        } else {
            return redirect()->route('user.reset')->with('error', 'Sorry, The link is broken, please genarte a new one.');
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
        $user = User::where('remember_token', $request->token)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->remember_token = null;
            $user->save();
            return redirect()->route('user.login')->with('success', 'Password reset successful. Please login with your new password.');
        } else {
            return redirect()->back()->with('error', 'Sorry, The link is broken, please genarte a new one.');
        }
    }
}
