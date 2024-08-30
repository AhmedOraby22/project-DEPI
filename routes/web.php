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

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('dashboard.adminlogin');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('dashboard.logout');
Route::get('/dashboard/home', function () {
    return view('dashboard.home');
});


Route::get('/admin/profile', function () {
    
    $admin = Auth::guard('admin')->user();
    
    return view('dashboard.profile.index', compact('admin'));
})->name('admin.profile')->middleware('auth:admin');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


