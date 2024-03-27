<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployeeMiddleware
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
         $roleName = session('roleName');

   
        if ($roleName === 1 || $roleName === 2 ||  $roleName === 9 || $roleName === 10 || $roleName === 11 || $roleName === 12 || $roleName === 13) 
        { 
            return $next($request); 
        }else {
            abort(401);

        }
    }
}
