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
Route::put('post/{id}','PostsController@update')->name('updatePost');
Route::get('post/delete/{id}','PostsController@destroy')->name('deletePost');
Route::get('post/{id}','PostsController@show');
Route::put('user/{id}','UsersController@update');



