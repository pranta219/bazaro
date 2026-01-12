<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('products.show');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update/{cartKey}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{cartKey}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Compare
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
Route::post('/compare/add', [CompareController::class, 'add'])->name('compare.add');
Route::delete('/compare/remove/{productId}', [CompareController::class, 'remove'])->name('compare.remove');
Route::delete('/compare/clear', [CompareController::class, 'clear'])->name('compare.clear');

// Orders (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order/success/{orderId}', [OrderController::class, 'success'])->name('order.success');
});

// Authentication
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Wishlist (protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/toggle', [App\Http\Controllers\WishlistController::class, 'toggle'])->name('wishlist.toggle');

    // Check if we need to add checkout route here if it wasn't already
    // It was already in the file, but let's make sure we don't duplicate or mess up.
    // The previous view showed OrderController routes in a separate auth group. I can keep them separate or merge.
    // I will just add Wishlist routes here.
});
