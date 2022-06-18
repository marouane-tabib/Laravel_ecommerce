<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , [FrontController::class , 'index'])->name('front.home');
Route::get('/cart' , [FrontController::class , 'cart'])->name('front.cart');
Route::get('/checkout' , [FrontController::class , 'checkout'])->name('front.checkout');
Route::get('/detail' , [FrontController::class , 'detail'])->name('front.detail');
Route::get('/shop' , [FrontController::class , 'shop'])->name('front.shop');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
