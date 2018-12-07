<?php

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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product-details/{product}', 'HomeController@productDetails')->name('product-details');
Route::prefix('admin')->group(function () {
    Route::resource('products', 'ProductController');  
    Route::resource('product-keys', 'ProductKeyController');  
});

