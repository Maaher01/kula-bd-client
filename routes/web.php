<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [HomepageController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/our-menu', [CategoryController::class, 'showCategoryProducts']);
Route::get('/item-details/{id}', [ProductController::class, 'show']);
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'getUserCart'])->name('cart.get');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
    Route::post('/cart/update-quantity', [CartController::class, 'updateProductQuantity'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeProductFromCart'])->name('cart.remove');
    Route::get('/checkout', [OrderController::class, 'proceedToCheckout'])->name('checkout.proceed');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
});
Route::post('/messagesubmit', [HomepageController::class, 'messagesubmit']);
Route::get('/register', [HomepageController::class, 'register'])->middleware('guest');
Route::get('/login', [HomepageController::class, 'login'])->middleware('guest')->name('login');
Route::get('/about', [HomepageController::class, 'aboutus']);
Route::get('/faq', [HomepageController::class, 'faq']);
Route::get('/gallery', [HomepageController::class, 'gallery']);
Route::get('contact', [HomepageController::class, 'contact']);

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
