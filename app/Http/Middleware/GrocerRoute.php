<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class GrocerRoute
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
        // Config:set('subdomain', 'grocer');
        return $next($request);
    }
}
