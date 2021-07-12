<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd(auth()->user()->role);
        if(auth()->user()->role == 'admin')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route(auth()->user()->role)->with('error',"You have don't have the access");
        }
    }
}
