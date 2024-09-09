<?php

use Illuminate\Http\Request;

<<<<<<< HEAD
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
=======
// Define the starting time for the application
define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode
>>>>>>> 92410e7cfb6a76ac24aaafd08aec6cc2c8a2e5cf
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

<<<<<<< HEAD
// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
=======
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
>>>>>>> 92410e7cfb6a76ac24aaafd08aec6cc2c8a2e5cf
