<?php


use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AuthenticateJwt;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__ . '/../routes/api.php',
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->append(AuthenticateJwt::class);
        //i didn't register it here just like what you said sir pero eto na ung bagong way
        //i am still using the middleware but not globally and instead i use the
        //refresh and token and invalidate for logout all works fine now sir
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


    