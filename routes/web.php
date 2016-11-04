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


    //------------------------
    Route::get('/logout', 'Auth\CustomAuthController@getAdminLogout');




});
