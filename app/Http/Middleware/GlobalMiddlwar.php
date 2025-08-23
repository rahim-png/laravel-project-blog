<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddlwar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo" from glabalemaddleware ";
        echo "<pre>";
        // Print all request data
        // This will help in debugging and understanding the request flow
        echo "Request Data: ";
        // Using print_r to display the request data in a readable format
        print_r($request->all());
        return $next($request);
    }
}
