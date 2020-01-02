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

//Route::get('/home', function () {
//    return view('layouts.master');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user', 'UserController@update');

Route::get('/inbox', 'UserController@index');

Route::get('/manageUser', 'UserController@indexManage');

