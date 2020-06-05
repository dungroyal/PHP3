<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@index');

$prefix='product';
Route::group(['prefix' => $prefix], function () use($prefix) {
    $controller = $prefix.'Controller@';
    Route::get('/',$controller.'index');
    Route::get('/product/a',$controller.'detail');
    Route::get('/'.$prefix.'/edit/{id}',$controller.'form')->where('id','[0-9]+');
    Route::get('/'.$prefix.'/delete/{id}',$controller.'delete')->where('id','[0-9]+');
});