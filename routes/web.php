<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index'])->name('index ');
Route::get('/cart', [MainController::class, 'cart'])->name('cart ');
Route::get('/shop', [MainController::class, 'shop'])->name('shop ');
Route::get('/single', [MainController::class, 'single'])->name('single ');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout ');

