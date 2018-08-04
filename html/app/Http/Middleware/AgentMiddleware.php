<?php

namespace App\Http\Middleware;

use Closure;

class AgentMiddleware
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

        if ($request->user() && $request->user()->role != 'Agent')
        {
            return new Response(view('unauthorized')->with('role', 'AGENT'));
        }
        return $next($request);


    }
}
