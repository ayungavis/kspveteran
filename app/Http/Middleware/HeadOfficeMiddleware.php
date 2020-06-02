<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class HeadOfficeMiddleware
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
        $user = $request->user();
        if ($user and $user->role->level < 2 and ($user->role->code != 'super-admin' or $user->role->code != 'head-office')) {
            return new Response(view('forbidden'));
        }

        return $next($request);
    }
}
