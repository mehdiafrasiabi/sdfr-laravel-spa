<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo(function (){
            $currentPath= request()->path();
            if (str_starts_with($currentPath,'admin')){
                return route('admin.sign-in');
            }
                return route('client.auth.index');

        });

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
