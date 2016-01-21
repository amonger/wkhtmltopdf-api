<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticationMiddleware
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
        if ($request->header('auth') !== env('AUTH_KEY')) abort(401);

        return $next($request);
    }
}
