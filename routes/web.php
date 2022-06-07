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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sample', [App\Http\Controllers\Sample::class, 'index'])->name('sample');

Route::get('/parallax', [App\Http\Controllers\Parallax::class, 'index'])->name('parallax');


/*|contains the portfolio routes|*/

Route::get('/portfolio/events', [App\Http\Controllers\PortfolioController::class, 'portfolioEvents'])->name('portfolio-events');

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
Route::get('/reviews', [App\Http\Controllers\Reviews::class, 'index'])->name('reviews');
