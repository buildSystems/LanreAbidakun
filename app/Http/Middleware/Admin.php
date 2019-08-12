<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Route;


class Admin
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

        //dd(Route::is('view-users'));
        if((Route::is('create-user') || Route::is('view-users')) && Auth::user()->role_id != 1)
            return redirect('/admin/dashboard/view-posts');
        return $next($request);
    }
}
