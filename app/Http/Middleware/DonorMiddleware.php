<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class DonorMiddleware
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
        if(!($request->user()->hasRole('donor'))){
            return new Response(view('unauthorized')->with('role', 'DONOR'));
        }
        return $next($request);
    }
}
