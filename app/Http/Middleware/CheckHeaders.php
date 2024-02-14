<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log; // Import Log facade

class CheckHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // logic implementation is pending
        Log::debug("Custom MiddleWare was called.");
        Log::debug("$request->headers");
        $ua = $request->header("user-agent");
        if (str_contains($ua,"Linux")) {
            return redirect("unauth");

        }
        return $next($request);
    }
}
