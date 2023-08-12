<?php

namespace App\Http\Middleware;

use Closure;
use session;
use Illuminate\Http\Request;

class adminafterlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('adminid')){
            return redirect('admin_dashboard');
        }
         return $next($request);
    }
}
