<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [HomepageController::class, 'index']);

// Registration
Route::get('/register', [HomepageController::class, 'register'])->middleware('guest');
Route::post('/register', [RegistrationController::class, 'register'])->middleware('guest');
// Login
Route::get('/login', [HomepageController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
// Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/cart', [HomepageController::class, 'cart']);
Route::get('/checkout', [HomepageController::class, 'checkout']);
Route::get('/about', [HomepageController::class, 'aboutus']);
Route::get('/faq', [HomepageController::class, 'faq']);
Route::get('/our-menu', [CategoryController::class, 'showCategoryProducts']);
Route::get('/gallery', [HomepageController::class, 'gallery']);
Route::post('/messagesubmit', [HomepageController::class, 'messagesubmit']);
Route::get('/item-details/{id}', [HomepageController::class, 'itemdetails']);

Route::get('contact', function () {
    return view('components.contact');
});
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
