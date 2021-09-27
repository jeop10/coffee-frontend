<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all', function () {
    return view('lister');
});

Route::get('/coffee/cortado', function () {
    return view('detail');
});

Route::get('/loaded-cart', function () {
    return view('loaded-cart');
});

Route::get('/cart-detail', function () {
    return view('cart-detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/user-orders', function () {
    return view('user-orders');
});

Route::get('/order-detail', function () {
    return view('order-detail');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});
