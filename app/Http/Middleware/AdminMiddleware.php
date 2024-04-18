<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an administrator
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }

        // If not an admin, redirect or show an error page
        return redirect()->route('table')->with('error', 'You are not authorized to access this page.');
    }
}
