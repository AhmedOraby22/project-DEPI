<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\BlogController;

Route::get('/home', function()
{
    return view('dashboard.home');
});
Route::resource('user', UserController::class, ['except' => ['show', 'update']])
    ->parameters(['user' => 'id']);
Route::controller(UserController::class)->prefix('/user')->name('user.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
        Route::get('{id}', 'show')->name('show');
    }
);
Route::resource('doctor', DoctorController::class, ['except' => ['show', 'update']])
    ->parameters(['doctor' => 'id']);
Route::controller(DoctorController::class)->prefix('/doctor')->name('doctor.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
        Route::get('{id}', 'show')->name('show');
    }
);
Route::resource('country', CountryController::class, ['except' => ['show', 'update']])
    ->parameters(['country' => 'id']);
Route::controller(CountryController::class)->prefix('/country')->name('country.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
    }
);
Route::resource('city', CityController::class, ['except' => ['show', 'update']])
    ->parameters(['city' => 'id']);
Route::controller(CityController::class)->prefix('/city')->name('city.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
    }
);
Route::resource('patient', PatientController::class, ['except' => ['create','store','show', 'update']])
    ->parameters(['patient' => 'id']);
Route::controller(PatientController::class)->prefix('/patient')->name('patient.')->group(
    function()
    {
        Route::put('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
        Route::get('{id}', 'show')->name('show');
    }
);

Route::resource('contact', ContactController::class, ['except' => ['create','store','show', 'update']])
    ->parameters(['contact' => 'id']);
Route::controller(ContactController::class)->prefix('/contact')->name('contact.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
        Route::get('{id}', 'show')->name('show');
    }
);
Route::resource('department', DepartmentController::class, ['except' => ['show', 'update']])
    ->parameters(['department' => 'id']);
Route::controller(DepartmentController::class)->prefix('/department')->name('department.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
    }
);
Route::resource('blog',BlogController::class, ['except' => ['show', 'update']])
    ->parameters(['blog' => 'id']);
Route::controller(BlogController::class)->prefix('/blog')->name('blog.')->group(
    function()
    {
        Route::post('{id}', 'update')->name('update');
        Route::get('{id}', 'edit')->name('edit');
    }
);
Route::get('/patients', [PatientController::class, 'index'])->name('dashboard.patient.index');
