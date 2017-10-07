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
    return view('intro');
});
Route::get('/users', 'TestController@index');
Route::post('update', 'UpdateController@index')->name('update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('login', 'Auth\LoginController@__construct')->name('login');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');