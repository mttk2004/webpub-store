<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\GuestOrCustomerMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
			'customer' => CustomerMiddleware::class,
			'admin' => AdminMiddleware::class,
			'guest_or_customer' => GuestOrCustomerMiddleware::class,
		]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
