<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for the about us page
Route::get('/about-us', [PageController::class, 'about'])->name('about');
