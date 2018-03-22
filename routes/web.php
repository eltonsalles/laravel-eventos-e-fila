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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/products', 'ProductsController', ['only' => ['index']]); // only = apenas
Route::resource('/stock-entries', 'StockEntriesController', ['only' => ['index', 'create', 'store']]); // only = apenas
Route::resource('/stock-outputs', 'StockOutputsController', ['only' => ['index', 'create', 'store']]); // only = apenas