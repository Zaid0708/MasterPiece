<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string|array  $roles  The roles to check against.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ensure the user is authenticated
        if (Auth::check()) {
            $userRole = Auth::user()->role_id;

            // Check if the user's role matches any of the given roles
            if (in_array($userRole, $roles)) {
                return $next($request);
            }
        }

        // If the user does not have the required role(s), redirect
        return redirect()->route('home')->with('error', 'Access denied. You do not have the required role.');
    }
}
