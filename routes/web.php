<?php

use App\Http\Controllers\{CategoryController, DestinationController, HotelController, TagController};
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tags', TagController::class)->name('tags');

Route::get('/categories', CategoryController::class)->name('categories');

Route::get('/destinations', DestinationController::class)->name('destinations');

Route::get('/hotel', HotelController::class)->name('hotel');

Route::get('/agenda', CalendarController::class)->name('calendar');
