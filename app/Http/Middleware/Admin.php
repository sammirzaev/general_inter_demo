<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::check()){

            if(Auth::user()->isAdmin() == 1 && Auth::user() ){
                return $next($request);
            }else{
                return redirect(app()->getLocale().'/home');
            }
            return redirect('/admin');
        }

        return redirect('/login');
    }
}
