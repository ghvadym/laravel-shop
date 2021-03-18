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

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/', 'MainController@index')->name('home');
    Route::get('/shop', 'MainController@shop')->name('shop');

    Route::get('/basket', 'BasketController@basket')->name('basket');
    Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
    Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');

    Route::get('/categories', 'MainController@categories')->name('categories');
    Route::get('/{category}', 'MainController@category')->name('category');
    Route::get('/{category}/{product}', 'MainController@product')->name('product');
});
