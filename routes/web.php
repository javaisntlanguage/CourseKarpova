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

Auth::routes();
Route::get('/', 'CategoryController@index')->name('welcome');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/admin', 'AdminController@index')->name('admin');
        Route::get('/admin/{x}', 'AdminController@table');
        Route::get('/send', 'AdminController@send')->name('send');
    });
    Route::get('/{id}', 'CategoryController@distribution');

});