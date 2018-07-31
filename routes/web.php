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

Route::get('/search', 'SearchController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{user}', 'UserAccountController@edit')->name('users.edit');

Route::post('/users/{user}/update', 'UserAccountController@update')->name('users.update');

Route::get('user/admin', 'UserController@index')->name('user.admin');

Route::get('user/show/{user}', 'UserController@show')->name('user.show');

Route::get('user/create', 'UserController@create')->name('user.create');

Route::post('user/store/{user}', 'UserController@store')->name('user.store');

Route::get('user/{user}/edit', 'UserController@show')->name('user.edit');

Route::post('user/update/{user}', 'UserController@show')->name('user.update');

//Route::get('/search', 'SearchController@mySearch')->name('m-search');


Route::get('/user/{user}', 'UserController@edit')->name('user.edit'); //administrator





