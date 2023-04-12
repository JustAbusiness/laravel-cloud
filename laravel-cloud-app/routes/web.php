<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ProductController::class, 'show'])->name('product');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('delete-from-add-to-cart/{id}', [CartController::class, 'deleteCart'])->name('delete-add-to-cart');