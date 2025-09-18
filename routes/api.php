<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/sellers-json', [SellerController::class, 'getSellersJson']);
Route::post('/sellers', [SellerController::class, 'storeApi']);

Route::post('/sellers', [SellerController::class, 'store']); // add sellers
Route::get('/sellers', [SellerController::class, 'getSellersJson']); // ✅ GET for fetching sellers 