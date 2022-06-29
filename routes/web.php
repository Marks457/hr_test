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

Route::get('/', 'App\Http\Controllers\WeatherController@index')->name('index');
Route::get('/orders', 'App\Http\Controllers\OrdersController@index')->name('orders_list');
Route::get('/orders/edit/{id}', 'App\Http\Controllers\OrdersController@edit')->name('orders_edit');
Route::post('/orders/update/{order}', 'App\Http\Controllers\OrdersController@update')->name('orders_update');
