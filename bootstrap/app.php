<?php

use App\Http\Middleware\CheckIfAdmin;
use Illuminate\Foundation\Application;
use App\Http\Middleware\LogHttpRequests;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // TODO
        // REGISTER YOUR MIDDLEWARES HERE
        // YOU CAN USE ALIAS, AND REMEMBER THE PRIORITIZATION OF APPLYING MIDDLEWARES

        $middleware->append(LogHttpRequests::class); // global middleware
        $middleware->alias([
            'admin' => CheckIfAdmin::class
        ]); // route middleware
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
