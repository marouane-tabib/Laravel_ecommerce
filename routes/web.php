<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Back\BackController;

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

Route::get('/admin/index' , [BackController::class , 'index'])->name('back.index');
Route::get('/admin/login' , [BackController::class , 'login'])->name('back.login');
Route::get('/admin/forgot-password' , [BackController::class , 'forgot_password'])->name('back.forgot_password');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
