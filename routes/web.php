<?php

use App\CoffeeApi\ApiClient;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'show']);

Route::get('/products/{product}', [ProductsController::class, 'show']);

Route::get('/all', function () {
    return view('lister');
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

Route::get('/test-products', function () {
    $api = new ApiClient();

    $response = json_decode($api->getProducts()->getBody());

    return response()->json($response);
});
