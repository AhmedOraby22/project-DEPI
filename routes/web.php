<?php

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ForgotPasswordController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route for the about us page

// Route::get('/about-us', [PageController::class, 'about-us'])->name('about-us');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('/about-us', [PageController::class, 'about'])->name('about');

// Route for showing the registration form
Route::get('/register', [UserController::class, 'create'])->name('register');
// Route for storing the registration data
Route::post('/register', [UserController::class, 'store'])->name('register.store');
// Route for showing the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route for handling login submissions
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
// Route for logging out
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route for showing the user profile (protected by authentication)
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile')->middleware('auth');
// Route for updating the profile
Route::post('/profile/{id}', [UserController::class, 'update'])->name('web.profile.update');
// Route for showing the profile of a specific user (protected by authentication)
Route::get('/profile/{id}', [UserController::class, 'showUserProfile'])->name('web.profile.show')->middleware('auth');
// Route for deleting a profile
Route::delete('/profile/{id}', [UserController::class, 'destroy'])->name('profile.destroy');
// Route for sending a contact message
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
// Routes for password management
Route::middleware('guest')->group(function()
{
    Route::view('/forgot-password', 'web.auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
    Route::get('/reset-password', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');
});

// Routes for managing doctors
Route::resource('doctors', DoctorController::class);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/blog', function () {
    return view('blog');
});


Route::view('/search','web.search')->name('search');