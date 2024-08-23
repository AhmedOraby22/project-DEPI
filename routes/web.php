<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for the about us page
Route::get('/about-us', [PageController::class, 'about'])->name('about');
=======

>>>>>>> ee9e0b36630d3e263f9a3aac9dc76f2d56c7bfc9
