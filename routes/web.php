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

Route::get('/logout',function(){
	Auth::logout();
	return redirect('home');
});

Route::resource('posts','PostsController');

Route::prefix('post')->group(function () {
	// dd(Request::all());
	Route::get('/myposts','PostsController@myPosts');
	Route::put('/{id}','PostsController@update');
	Route::get('/delete/{id}','PostsController@destroy');
	Route::get('/{id}','PostsController@show');
	Route::get('/likePost/{id}','LikesController@store');

});

Route::prefix('user')->group(function () {
	Route::put('/uploadImg/{image}','UsersController@uploadImage');
});

Route::prefix('comments')->group(function(){
	Route::get('/{id}','CommentsController@show');
	Route::post('/{id}','CommentsController@store');

});







