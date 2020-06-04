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
    return view('home');
});
Route::get('/flight','flightController@index');
Route::get('/flight/create','flightController@create');
Route::post('/flight/store','flightController@store');
Route::get('/flight/edit/{id}','flightController@edit');
Route::get('/flight/del/{id}','flightController@del');
Route::post('/flight/update/{id}','flightController@update');
Route::get('/login','loginController@index');

