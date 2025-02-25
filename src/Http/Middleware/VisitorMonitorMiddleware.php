<?php

namespace MarJose123\Detectify\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VisitorMonitorMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        return $next($request);
    }
}
