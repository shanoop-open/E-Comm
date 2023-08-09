<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('/edit-cart',[ProductController::class,'addToCart']);
Route::get('cart-list',[ProductController::class,'cartList']);

Route::get('remove-from-cart/{id}',[ProductController::class,'removeFromCart']);
Route::get('order-now',[ProductController::class,'orderNow']);

