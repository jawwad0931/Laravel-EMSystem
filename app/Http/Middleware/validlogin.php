<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class validlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (session()->has('id')) {
            return $next($request);  // User is authenticated, continue to the next request
        }else{
            
            // If not authenticated, redirect to login
            return redirect()->route('login');
        }

    }
}
