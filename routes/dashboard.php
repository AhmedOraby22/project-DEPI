<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ClientController;

Route::group(['middleware' => 'admin', 'auth'], function()
{
    Route::resource('user', UserController::class, ['except' => ['show', 'update']])
        ->parameters(['user' => 'id']);
    Route::controller(UserController::class)->prefix('/user')->name('user.')->group(
        function()
        {
            Route::post('changeStatus', 'changeStatus')->name('changeStatus');
            Route::post('{id}', 'update')->name('update');
            Route::get('{id}', 'profile')->name('profile');
        }
    );
    Route::resource('client', ClientController::class, ['except' => ['create','store','show', 'update']])
        ->parameters(['client' => 'id']);
    Route::controller(ClientController::class)->prefix('/client')->name('client.')->group(
        function()
        {
            Route::post('changeStatus', 'changeStatus')->name('changeStatus');
            Route::post('{id}', 'update')->name('update');
        }
    );
});