<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use App\Http\Controllers\Auth;
class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       

       
            if (Auth::guard('admin')->check()) {
                 return redirect()->route('admin.dashboard');
                //  if user is logged in then we will send to dashboard page
            }
      

        return $next($request);
    }
}
