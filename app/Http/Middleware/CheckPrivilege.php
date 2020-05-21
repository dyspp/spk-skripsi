<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPrivilege
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->isSuperAdmin())
        {
            return $next($request);
        }
        else
        {
            session()->flash('unauthorized', 'You don\'t have permission to access the page.');
            
            return redirect(route('admin.dashboard'));
        }
    }
}
