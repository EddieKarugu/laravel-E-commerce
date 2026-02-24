<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/attemptLogin', [AuthController::class, 'attemptLogin'])->name('attemptLogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/attemptRegister', [AuthController::class, 'attemptRegister'])->name('attemptRegister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::get('/cart', function (){
//    return view('pages.cart');
//})->name('cart')->middleware('auth');

Route::get('/wallet', function (){
    return view('pages.wallet');
})->name('wallet')->middleware('auth');

Route::get('/settings', function (){
    return view('pages.account');
})->name('settings')->middleware('auth');

Route::get('/productDetails/{id}',
   [ProductController::class, 'details'])
   ->name('productDetails')
   ->middleware('auth');

Route::get('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store')->middleware('auth');

Route::resource('cart', CartController::class,)->names([
    'index'=>'cart'
    ]
)->middleware('auth');
