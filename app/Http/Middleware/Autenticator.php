<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Autenticator
{

    /**
     * @throws AuthenticationException
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            throw new AuthenticationException();
        }

        return $next($request);
    }
}
