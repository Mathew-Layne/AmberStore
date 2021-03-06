<?php

use App\Http\Controllers\LogoutController;
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
    return view('index');
});

Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/cart', 'cart')->name('cart');
Route::view('/product', 'product')->name('product');
Route::view('/productdetails', 'productdetails')->name('productdetails');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('category', 'categories')->name('category');
Route::view('product', 'products')->name('product');
Route::view('option', 'options')->name('option');
