<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Models\Profile;
use App\Models\Admin;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for the about us page
Route::get('/about-us', [PageController::class, 'about'])->name('about');




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


