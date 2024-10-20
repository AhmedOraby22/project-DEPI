<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (user() && user()->status == 1) {
            return $next($request);
        }
        Auth::logout();
        return redirect(route('dashboard.auth.login'))->with('message_false', 'Message_Support');
    }
}
