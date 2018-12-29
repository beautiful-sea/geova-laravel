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
	return view('newsfeed');
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
	Route::get('/like/{id}','LikesController@store');
});

Route::prefix('user')->group(function () {
	Route::put('/uploadImg/{image}','UsersController@uploadImage');
	Route::get('/friends','UsersController@getFriends');
});

Route::prefix('comments')->group(function(){
	Route::get('/{id}','CommentsController@show');
	Route::get('/like/{commentId}/{postId}','CommentsController@like');
	Route::get('/delete/{postId}/{commentId}','CommentsController@destroy');
	Route::post('/{postId}','CommentsController@store');

});







