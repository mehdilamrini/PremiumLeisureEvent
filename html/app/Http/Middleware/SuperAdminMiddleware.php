<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class SuperAdminMiddleware
{
    
    public function handle($request, Closure $next)
    {


        if ($request->user() && $request->user()->role != 'SuperAdmin')
        {
            return new Response(view('unauthorized')->with('role', 'SuperAdmin'));
        }
        return $next($request);



    }
}
