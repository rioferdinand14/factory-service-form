<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an administrator or super administrator
        if ($request->user() && ($request->user()->isAdmin() || $request->user()->isSuperAdmin())) {
            return $next($request);
        }

        // If not an admin or super admin, redirect or show an error page
        return redirect()->route('table')->with('error', 'You are not authorized to access this page.');
    }
}
