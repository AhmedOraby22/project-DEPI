<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        then: function($router)
        {
            Route::prefix('dashboard')
                ->middleware('web')
                ->name('dashboard.')
                ->group(base_path('routes/dashboard.php'));
        }
    )
    ->withMiddleware(function(Middleware $middleware)
    {
        //
    })
    ->withExceptions(function(Exceptions $exceptions)
    {
        //
    })->create();
