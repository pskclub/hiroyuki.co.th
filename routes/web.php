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

Route::get('/', 'MainController@index');
Route::get('/contact', 'MainController@contact');
Route::get('/network', 'MainController@network');
Route::get('/category', 'ProductController@categoryList');
Route::get('/category/{category_id}', 'ProductController@productByCategoryId');
Route::get('/product/{product_id}', 'ProductController@productById');

Route::get('/admin/login', 'Auth\CustomAuthController@getAdminLogin');
Route::post('/admin/login', 'Auth\CustomAuthController@postAdminLogin');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    //ผู้ใช้
    Route::get('/', 'admin\HomeController@index');
    Route::get('/user', 'admin\UserController@index');
    Route::get('/user/add', 'admin\UserController@getAdd');
    Route::post('/user/add', 'admin\UserController@postAdd');
    Route::get('/user/{id}/edit', 'admin\UserController@getUpdate')->where(['id' => '[0-9]+']);
    Route::post('/user/{id}/update', 'admin\UserController@postUpdate')->where(['id' => '[0-9]+']);
    Route::get('/user/{id}/delete', 'admin\UserController@getDelete')->where(['id' => '[0-9]+']);

    Route::get('/category', 'admin\CategoryController@index');
    Route::get('/category/add', 'admin\CategoryController@add');
    Route::post('/category/add', 'admin\CategoryController@store');
    Route::get('/category/{category_id}/edit', 'admin\CategoryController@edit')->where(['id' => '[0-9]+']);
    Route::post('/category/{category_id}/edit', 'admin\CategoryController@update')->where(['id' => '[0-9]+']);
    Route::get('/category/{category_id}/delete', 'admin\CategoryController@delete');

    Route::get('/product', 'admin\ProductController@index');
    Route::get('/product/add', 'admin\ProductController@add');
    Route::post('/product/add', 'admin\ProductController@store');
    Route::get('/product/{product_id}/edit', 'admin\ProductController@edit')->where(['id' => '[0-9]+']);
    Route::post('/product/{product_id}/edit', 'admin\ProductController@update')->where(['id' => '[0-9]+']);
    Route::get('/product/{product_id}/delete', 'admin\ProductController@delete');


    //------------------------
    Route::get('/logout', 'Auth\CustomAuthController@getAdminLogout');




});
