<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authorized2
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
        if($request->session()->has('username2'))
        return $next($request);
     else
        return redirect()->route('logina');
    }
}
