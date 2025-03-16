<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Checks if client is authenticated and is an admin 
        if ($request->user()->isAdmin())
        {
            return $next($request);
        }

        // Client's request is aborted if they are not an admin
        abort(401, 'UNAUTHORIZED');
    }
}
