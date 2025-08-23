<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use Symfony\Component\HttpFoundation\Response;

class cuntryChack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        echo" from cuntrychack ";
        echo "<pre>";
        Print_r ($request);

        return $next($request);
    }
}
