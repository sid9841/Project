<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class FundraiserMiddleware
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
        if(!($request->user()->hasRole('fundraiser'))){
            return new Response(view('fundraiser')->with('role', 'FUNDRAISER'));
        }
        return $next($request);
    }
}
