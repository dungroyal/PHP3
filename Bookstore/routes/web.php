<?php

use Illuminate\Support\Facades\Route;

// ======================= HOME =======================
Route::get('/', 'homeController@index');
Route::get('/product', 'productController@index');
Route::get('/product/{id}', 'productController@detail');
Route::get('/category/{id}', 'productController@product_by_id');
Route::post('/login', 'homeController@login');
Route::get('/logout', 'homeController@logout');
Route::post('/search', 'productController@search');
Route::post('/vote/{id}', 'productController@vote');
Route::get('/addToCart/{id}', 'cartController@addToCart');
Route::get('/cart', 'homeController@cart');
Route::get('/cart/delete/{id}', 'cartController@detete_item_cart');
Route::get('/checkout', 'cartController@checkout');
Route::post('/checkout_submit', 'cartController@checkout_submit');

// ======================= ADMIN =======================

Route::group(['prefix' => 'admin123'], function () {
    Route::get('/', 'loginController@login')->name('login');
    Route::post('/loginSubmit', 'loginController@checklogin');
    Route::get('/logout', 'loginController@logout')->name('logout');
    // --------------------------------------------------------------------
    Route::get('/Dashboard', 'adminController@dashboard')->name('Dashboard');

    // --------------------------------- Product -----------------------------------
    Route::get('/product', 'adminController@product')->name('admin-product');
    Route::get('/product/create', 'adminController@creat_product')->name('admin-create_product');
    Route::post('/product/create/submit', 'adminController@create_product_submit')->name('create_product_submit');
    Route::get('/product/update/{id}', 'adminController@update_product')->name('admin-update_product');
    Route::post('/product/update/submit/{id}', 'adminController@update_product_submit');
    Route::get('/product/delete/{id}', 'adminController@del_product_submit');
    
    // --------------------------------- Category -----------------------------------
    Route::get('/category', 'adminController@catalogs')->name('admin-catalog');

    // --------------------------------- Order -----------------------------------
    Route::get('/order', 'adminController@order')->name('admin-order');

    // --------------------------------- User -----------------------------------
    Route::get('/user', 'adminController@user')->name('admin-user');
});





// $prefix='product';
// Route::group(['prefix' => $prefix], function () use($prefix) {
//     $controller = $prefix.'Controller@';
//     Route::get('/',$controller.'index');
//     Route::get('/product/a',$controller.'detail');
//     Route::get('/'.$prefix.'/edit/{id}',$controller.'form')->where('id','[0-9]+');
//     Route::get('/'.$prefix.'/delete/{id}',$controller.'delete')->where('id','[0-9]+');
// });