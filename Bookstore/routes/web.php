<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@index');

// $prefix='home';
// Route::group(['prefix' => $prefix], function () use($prefix) {
//     $controller = $prefix.'Controller@';
//     Route::get('/',$controller.'index');
//     Route::get('/edit/{id}',$controller.'form')->where('id','[0-9]+');
//     Route::get('/delete/{id}',$controller.'delete')->where('id','[0-9]+');
// });