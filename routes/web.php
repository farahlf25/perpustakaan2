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

Route::get('/', 'BookController@index');

Route::get('/create', 'BookController@create');
Route::post('/store', 'BookController@store');

Route::get('/update', 'BookController@update');
Route::post('/edit/{id}', 'BookController@edit');

Route::get('/destroy/{id}', 'BookController@destroy');
