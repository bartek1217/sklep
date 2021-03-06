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

Route::get('/', 'ProductsController@index');
Route::get('basket', 'BasketController@index');
Route::get('basket/add', 'BasketController@store');
Route::get('basket/address', 'BasketController@address');
Route::post('basket/summary', 'BasketController@summary');
Route::post('basket/save', 'BasketController@save');