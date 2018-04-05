<?php

namespace App\Http\Middleware;

use Closure;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
class IsAdmin
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
        if (Auth::user() &&  Auth::user()->admin == 2) {
            return $next($request);
        }

       return redirect('/admin');
     }
}
