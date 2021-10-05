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
Route::get('/', 'App\Http\Controllers\HomeController@index');

//Product
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/viewProduct', 'App\Http\Controllers\ProductController@viewProduct');
Route::get('/addToCartProduct', 'App\Http\Controllers\ProductController@addToCartProduct');
Route::get('/checkOutProduct', 'App\Http\Controllers\ProductController@checkOutProduct');
Route::post('/addOrder', 'App\Http\Controllers\ProductController@addOrder');