<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $level)
    {
        foreach (Auth::user()->roles as $key){
            if ($key->roleName === 'Admin' && $level == 0){
                return $next($request);
            }
            if ($key->roleName === 'Seller' && $level == 1){
                return $next($request);
            }
            if ($key->roleName === 'Customer' && $level == 2){
                return $next($request);
            }
        }

        return back();

    }
}
