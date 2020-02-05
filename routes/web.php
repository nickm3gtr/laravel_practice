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

Route::get('/', 'ItemController@index');
Route::post('/items', 'ItemController@store');
Route::get('/items/{id}', 'ItemController@show');
Route::delete('/items/{id}', 'ItemController@destroy');
Route::put('/items/{id}', 'ItemController@update');
Route::get('items/{id}/edit', 'ItemController@edit');