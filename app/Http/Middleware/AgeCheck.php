<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //globale middleware rule applied
        echo "hi from agecheck ";
        //echo"<pre>";
        //print_r($request->all());
        if ($request->city != "LONDON"||$request->username != "RAHIM") {
            echo "you cannot visit this site";
        }else{
            echo" $request->username you can visit ";
        }
        return $next($request);
    }
}
