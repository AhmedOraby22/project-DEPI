<?php

<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Route;


Route::get('/register', function () {
    return view('web.auth.register');
});

Route::get('/login', function () {
    return view('web.auth.login');
});

Route::get('/profile', function () {
    return view('web.auth.profile');
});

Route::get('/contactus', function () {
    return view('web.form.contactus');
});
>>>>>>> 66b875e4b4bc499f29cc416982700bec43928a53
