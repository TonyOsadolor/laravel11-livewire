<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if(auth()->check() && auth()->user()->is_admin == 1){
            return $next($request);
        } else if(auth()->check() && auth()->user()->is_admin == 0){
            // session()->flush();
            return redirect()->route('user_dashboard')->with('status', 'Sorry, you are not Authorized!');
        } else{
            session()->flush();
            return redirect()->route('login')->with('status', 'Sorry, you are not Authorized!');
        }
        // return $next($request);
    }
}
