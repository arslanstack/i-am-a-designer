<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->is('admin') || $request->is('admin/*')) {
            return route('admin.login');
        } elseif ($request->is('designer') || $request->is('designer/*')) {
            return route('designer.login');
        } elseif ($request->is('user') || $request->is('user/*')) {
            return route('user.login');
        } else {
            return route('welcome');
        }
    }
}
