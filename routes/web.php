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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'LoginController@showLoginForm');

    Route::post('/login', 'LoginController@login');

    Route::get('/logout', 'LoginController@logout');

    Route::group(['middleware' => 'auth.admin'], function (){

        Route::get('/', 'HomeController@index');

        Route::get('/category/add', 'CategoryController@showAddForm');

        Route::post('/category/add', 'CategoryController@add');

        Route::get('/category', 'CategoryController@index');

        Route::get('/category/edit/{id}', 'CategoryController@showEditForm');

        Route::post('/category/edit/{id}', 'CategoryController@edit');

        Route::get('/category/delete/{id}', 'CategoryController@delete');


        #user
        Route::get('/user', 'UserController@index');

        Route::get('/user/delete/{id}', 'UserController@delete');

        #store
        Route::get('/store', 'StoreController@index');

        Route::get('/store/add', 'StoreController@showAddForm');

        Route::post('/store/add', 'StoreController@add');

        #coupon
        Route::get('/coupon', 'CouponController@index');

        Route::get('/coupon/add', 'CouponController@showAddForm');

        Route::post('/coupon/add', 'CouponController@add');

        #header
        Route::get('/header', 'HeaderController@index');

        Route::get('/header/add', 'HeaderController@showAddForm');

        Route::post('/header/add', 'HeaderController@add');

        Route::get('/header/edit/{id}', 'HeaderController@showEditForm');

        Route::post('/header/edit/{id}', 'HeaderController@edit');

        Route::get('/header/delete/{id}', 'HeaderController@delete');


    });
});
