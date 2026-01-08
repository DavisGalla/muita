<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AnalystMiddleware;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ... your other methods
		
        // added this
        $middleware->alias(['role' => RoleMiddleware::class]);

       //... other methods
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();