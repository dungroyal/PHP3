<?php

use Illuminate\Support\Facades\Route;

// ======================= HOME =======================
Route::get('/', 'homeController@index');
Route::get('/product', 'productController@index');
Route::get('/product/{id}', 'productController@detail');
Route::get('/category/{id}', 'productController@product_by_id');
Route::post('/login', 'homeController@login');
Route::post('/search', 'productController@search');
Route::post('/vote/{id}', 'productController@vote');
Route::get('/addToCart/{id}', 'cartController@addToCart');
Route::get('/cart', 'homeController@cart');


// ======================= ADMIN =======================
Route::get('/admin123', 'loginController@login')->name('login');
Route::get('/admin/Dashboard', 'adminController@dashboard');
Route::post('/admin123/loginSubmit', 'loginController@checklogin');
Route::get('/admin123/logout', 'loginController@logout')->name('logout');

// $prefix='product';
// Route::group(['prefix' => $prefix], function () use($prefix) {
//     $controller = $prefix.'Controller@';
//     Route::get('/',$controller.'index');
//     Route::get('/product/a',$controller.'detail');

    
//     Route::get('/'.$prefix.'/edit/{id}',$controller.'form')->where('id','[0-9]+');
//     Route::get('/'.$prefix.'/delete/{id}',$controller.'delete')->where('id','[0-9]+');
// });