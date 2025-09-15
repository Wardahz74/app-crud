<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::resource('products', ProductController::class);
Route::resource('sellers', SellerController::class);
Route::get('sellers/create', [SellerController::class, 'create'])->name('sellers.create');


// Register & Login
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Main page after login
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('products', ProductController::class);

// Sellers
Route::resource('sellers', SellerController::class);