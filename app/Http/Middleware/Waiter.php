<?php

namespace App\Http\Middleware;

use Closure;

class Waiter
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
            if(Auth::user()->isServer()){
                return $next($request);
            }
        }
        return redirect("/login");
    }
}
