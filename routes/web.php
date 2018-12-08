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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');


	Route::prefix('post')->group(function () {
		Route::put('/{id}','PostsController@update');
		Route::get('/delete/{id}','PostsController@destroy');
		Route::get('/{id}','PostsController@show');
	});


Route::put('user/{id}','UsersController@uploadImage');



