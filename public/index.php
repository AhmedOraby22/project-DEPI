<?php

use Illuminate\Http\Request;

// Determine if the application is in maintenance mode...

// Define the starting time for the application
define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Include the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Capture the incoming request
$request = Request::capture();

// Handle the request and get the response
$response = $app->handle($request);

// Send the response
$response->send();

// Terminate the request
$app->terminate($request, $response);

