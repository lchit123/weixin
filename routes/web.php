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
	// echo "123";die;
    return view("welcome");
});

Route::any('user/index','User\\UserController@index');

Route::any('user/add','User\\UserController@add');

