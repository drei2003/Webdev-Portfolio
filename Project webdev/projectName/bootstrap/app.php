<?php
use App\Http\Middleware\AgeMiddleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\ReqAcc;
use App\Http\Middleware\CheckAnswer;
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
        //middleware aliases

        $middleware->alias([
            'CheckAge' => CheckAge::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


