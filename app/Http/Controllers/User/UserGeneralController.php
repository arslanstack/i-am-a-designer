<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->back()->with('success', 'Verification email has been sent to your email address.');
        } else {
            return redirect()->back()->with('error', 'Sorry, we could not send the verification email. Please try again.');
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
}
