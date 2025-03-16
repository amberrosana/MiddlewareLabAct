<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class LogHttpRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Logs the IP address of the client and the URL of the HTTP request
        Log::info("Request from: {$request->getClientIp()}, URL: {$request->fullUrl()}");

        return $next($request);
    }
}
