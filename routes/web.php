<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for the about us page
Route::get('/about-us', [PageController::class, 'about'])->name('about');

// Route for showing the registration form
Route::get('/register', [UserController::class, 'create'])->name('register');

// Route for storing the registration data
Route::post('/register', [UserController::class, 'store'])->name('register.store');

// Route for showing the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route for handling login submissions
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Route for showing the home page (ensure you have the home view at this path)
Route::get('/home', function () {
    return view('web.home');
});

// Route for showing the user profile (protected by authentication)
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile')->middleware('auth');

// Route for showing the profile of a specific user (protected by authentication)
Route::get('/profile/{id}', [UserController::class, 'showUserProfile'])->name('profile.show')->middleware('auth');


Route::patch('/profile/{id}', [UserController::class, 'update'])->name('profile.update');



// Route for contact us page
Route::get('/contactus', function () {
    return view('web.form.contactus');
});

Route::get('/adminlogin', function () {
    return view('dashboard.adminlogin');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// });
