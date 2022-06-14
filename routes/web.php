<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*|Admin routes|*/
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/profile/{id}', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
    Route::post('/users', [App\Http\Controllers\AdminController::class, 'update'])->name('users');
    Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*|contains the portfolio routes|*/

Route::get('/portfolio/events', [App\Http\Controllers\PortfolioController::class, 'portfolioEvents'])->name('portfolio-events')->middleware('auth');

Route::get('/portfolio/portraits', [App\Http\Controllers\PortfolioController::class, 'portfolioPortraits'])->name('portfolio-portraits');

Route::get('/portfolio/families', [App\Http\Controllers\PortfolioController::class, 'portfolioFamilies'])->name('portfolio-families');

Route::get('/portfolio/engagement', [App\Http\Controllers\PortfolioController::class, 'portfolioEngagement'])->name('portfolio-engagement');

/*|contains the booking routes|*/
Route::get('/bookings/events', [App\Http\Controllers\BookingsController::class, 'bookingsEvents'])->name('bookings-events');

Route::get('/bookings/portraits', [App\Http\Controllers\BookingsController::class, 'bookingsPortraits'])->name('bookings-portraits');

Route::get('/bookings/families', [App\Http\Controllers\BookingsController::class, 'bookingsFamilies'])->name('bookings-families');

Route::get('/bookings/engagement', [App\Http\Controllers\BookingsController::class, 'bookingsEngagement'])->name('bookings-engagement');

/*|contains the about me route|*/
Route::get('/about-me', [App\Http\Controllers\AboutMe::class, 'index'])->name('about-me');

/*|contains the reviews route|*/
Route::get('/reviews', [App\Http\Controllers\Reviews::class, 'index'])->name('reviews')->middleware('isAdmin');

/*|Posts contact form data to mySQL|*/
Route::post('/form', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-form');

Route::get('/profile/{id}', [App\Http\Controllers\UserController::class, 'index'])->name('profile');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
