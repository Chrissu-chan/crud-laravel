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

Route::get('/', 'DataController@index');
Route::get('/penduduks/create', 'DataController@create');
Route::post('/penduduks', 'DataController@store');
Route::get('/penduduks/{id}/edit', 'DataController@edit');
Route::patch('/penduduks/{id}', 'DataController@update');
Route::delete('/penduduks/{id}', 'DataController@destroy');