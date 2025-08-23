<?php

use App\Http\Middleware\GlobalMiddlwar;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Register global middleware here
       // $middleware->append(AgeCheck::class);
       //$middleware->append( GlobalMiddlwar::class);
        
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
