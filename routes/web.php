<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;

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
Route::get('/adminlogin', function () {
    return view('dashboard.adminlogin');
});


Route::get('/admin/profile', function () {
    $profiles = Profile::all();
    
    
    return view('dashboard.profile.index', compact('profiles'));
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// });