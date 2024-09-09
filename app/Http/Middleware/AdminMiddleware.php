<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is logged in as admin
        if (!Auth::guard('admin')->check()) {
            // If not, redirect to the admin login page
            return redirect('/admin/login');
        }

        // If the user is authenticated as admin, proceed with the request
        return $next($request);
    }
}
