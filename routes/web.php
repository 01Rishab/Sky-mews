<?php

use App\Http\Controllers\CafeController;
use Illuminate\Support\Facades\Route;

// Dedicated Routes for each Navbar Tab
Route::get('/', [CafeController::class, 'home'])->name('home');
Route::get('/about', [CafeController::class, 'about'])->name('about');
Route::get('/ambiance', [CafeController::class, 'ambiance'])->name('ambiance');
Route::get('/menu', [CafeController::class, 'menu'])->name('menu');
Route::get('/instagram-feed', [CafeController::class, 'instagram'])->name('instagram');
Route::get('/reviews', [CafeController::class, 'reviews'])->name('reviews');
Route::get('/book-table', [CafeController::class, 'book'])->name('book');

// Reservation POST Endpoint
Route::post('/reserve', [CafeController::class, 'reserve'])->name('reserve');
