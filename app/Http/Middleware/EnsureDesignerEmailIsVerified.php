<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureDesignerEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('designer')->check() && !Auth::guard('designer')->user()->hasVerifiedEmail()) {
            return redirect()->route('designer.dashboard')->with('error', 'Please verify your email address first.');
        }

        return $next($request);
    }
}
