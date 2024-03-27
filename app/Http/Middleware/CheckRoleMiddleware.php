<?php
namespace App\Http\Middleware;
use Closure;
class CheckRoleMiddleware
{
    public function handle($request, Closure $next)
    {
        $roleName = session('roleName');

        if ($roleName === 1) { return $next($request); }
        if ($roleName === 2) { return $next($request); }
        if ($roleName === 9) { return $next($request); }
        if ($roleName === 10) { return $next($request); }
        if ($roleName === 11) { return $next($request); }
        if ($roleName === 12) { return $next($request); }
        if ($roleName === 13) { return $next($request); }
        return redirect('/')->with('error', 'Unauthorized access');
    }
}
