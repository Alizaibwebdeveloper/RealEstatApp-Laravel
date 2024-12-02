<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if the user is authenticated
        if (!$request->user()) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    
        // Check if the user's role matches the required role
        if ($request->user()->role !== $role) {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access.');
        }
    
        // Proceed with the request
        return $next($request);
    }
    
}
