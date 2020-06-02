<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class SuperAdminMiddleware
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
        if ($request->user() and $request->user()->role->level < 10) {
            return new Response(view('errors.404'));
        }

        return $next($request);
    }
}
