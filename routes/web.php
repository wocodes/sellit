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

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('has_store')->name('home');

Route::middleware('auth')->group(function() {
    Route::post('/product', 'ProductController@store')->name('product.store');

    Route::get('/create-store', 'StoreController@create')->name('store.create');

    Route::post('/create-store', 'StoreController@store')->name('store.store');
});

//Route::get('{shop}/{product_slug}/{product_id?}', 'ProductController@store')->name('product.store');
Route::get('product/{product_slug}', 'ProductController@show')->name('product.show');
