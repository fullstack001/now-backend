<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Utils\UserType;
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
        if(Auth::check() && Auth::user()->role == UserType::ADMIN){
            return $next($request);
        } else{
            return redirect()->route('admin.auth.login');
        }
    }
}
