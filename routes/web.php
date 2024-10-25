<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function()
{
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ForgotPsswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route for showing the home page (ensure you have the home view at this path)
Route::get('/home', function()
{
    return view('web.home');
});
// Route for showing the user profile (protected by authentication)
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile')->middleware('auth');
Route::post('/profile/{id}', [UserController::class, 'update'])->name('web.profile.update');
// Route for showing the profile of a specific user (protected by authentication)
Route::get('/profile/{id}', [UserController::class, 'showUserProfile'])->name('web.profile.show')->middleware('auth');
Route::delete('/profile/{id}', [UserController::class, 'destroy'])->name('profile.destroy');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
// Route for contact us page
Route::get('/contactus', function()
{
    return view('web.form.contactus');
});
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('dashboard.adminlogin');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('dashboard.logout');
Route::get('/dashboard/home', function()
{
    $admin = Auth::guard('admin')->user();
    return view('dashboard.home');
});
Route::get('/admin/profile', function()
{
    $admin = Auth::guard('admin')->user(); // Ensure admin is authenticated
    $admin = Auth::guard('admin')->user();
    return view('dashboard.profile.index', compact('admin'));
})->name('admin.profile')->middleware('auth:admin');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// routes/web.php
// عرض جميع الرسائل للإداريين
Route::get('/admin/contacts', [ContactController::class, 'listContacts'])->name('contacts.list');
// Contact Routes
Route::get('/contacts', [ContactController::class, 'listContacts'])->name('contacts.index');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::patch('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::post('/contacts/{id}/mark-as-read', [ContactController::class, 'markAsRead'])->name('contacts.markAsRead');
Route::middleware('guest')->group(function()
{
    Route::view('/forgot-password', 'web.auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [ForgotPsswordController::class, 'forgotPassword']);
    Route::get('/reset-password', [ForgotPsswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ForgotPsswordController::class, 'passwordUpdate'])->name('password.update');
});
Route::middleware('auth:admin')->group(function()
{
    Route::get('/add_country', [CountryController::class, 'index']);
    // Route::view('/add_country','web.form.country');
    Route::post('/add_country', [CountryController::class, 'create']);
    Route::get('/show_country', [CountryController::class, 'show'])->name('showcountry');
    Route::get('/add_city', [CityController::class, 'index'])->name('showcity');
    // Route::view('/add_city','web.form.city');
    Route::post('/add_city', [CityController::class, 'create']);
    Route::get('/show_city', [CityController::class, 'show']);
    Route::get('/delete_city/{id}', [CityController::class, 'destroy']);
    Route::get('/edit_city/{id}', [CityController::class, 'edit']);
    Route::put('update-city/{id}', [CityController::class, 'update']);
    Route::get('delete_country/{id}', [CountryController::class, 'destroy']);
    Route::get('edit_country/{id}', [CountryController::class, 'edit']);
    Route::put('update-country/{id}', [CountryController::class, 'update']);
});