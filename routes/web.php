<?php


use Illuminate\Support\Facades\Route;







use App\Http\Controllers\PageController;
use App\Http\Controllers\ForgotPsswordController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;

use App\Http\Controllers\ReservationController;

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ForgotPasswordController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\web\FaqController;
use App\Http\Controllers\SearchController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route for the about us page

// Route::get('/about-us', [PageController::class, 'about-us'])->name('about-us');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

// Route::get('/about-us', [PageController::class, 'about'])->name('about');

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

Route::middleware('auth:admin')->group(function()
{
    Route::get('/add_country', [CountryController::class, 'index']);
    // Route::view('/add_country','web.form.country');
    Route::post('/add_country', [CountryController::class, 'create']);
    Route::get('/show_country', [CountryController::class, 'show'])->name('showcountry');
    Route::get('/add_city', [CityController::class, 'index'])->name('showcity');
    // Route::view('/add_city','web.form.city');

    Route::post('/add_city',[CityController::class,'create']);

    Route::get('/show_city',[CityController::class,'show']);

    Route::get('/delete_city/{id}',[CityController::class,'destroy']);
    Route::get('/edit_city/{id}',[CityController::class,'edit']);
    Route::put('update-city/{id}',[CityController::class,'update']);


    Route::get('delete_country/{id}',[CountryController::class,'destroy']);
    Route::get('edit_country/{id}',[CountryController::class,'edit']);
    Route::put('update-country/{id}',[CountryController::class,'update']);


});

Route::get('/faqs', [FaqController::class, 'index'])->name('web.faqs.index');


Route::get('/reservation', function () {
    return view('reservation-form');
})->name('reservation');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');



// Routes for managing doctors
Route::resource('doctors', DoctorController::class);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/blog/{blog}',[BlogController::class, 'index'])->name('blog');


Route::get('/search',[SearchController::class, 'index'])->name('search');

Route::post('/search',[SearchController::class, 'show'])->name('search-d');

Route::get('/Neurology', function () {
    return view('web.Neurology');
});

Route::get('/Osteoporosis', function () {
    return view('web.Osteoporosis');
});


Route::get('/Heartcare', function () {
    return view('web.Heartcare');
});

Route::get('/Eyecare', function () {
    return view('web.Eyecare');
});
Route::view('/department','web.departement')->name('dep');

Route::get('/faq',[FaqController::class, 'index'])->name('faq.show');

Route::post('/faq_post',[FaqController::class, 'store'])->name('faq.store');