<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/sellers-json', [SellerController::class, 'getSellersJson']);