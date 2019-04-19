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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'FeedController@index')->name('home');
Route::post('/home', 'PostController@store')->name('post.store');

Route::get('/posts/drop', 'PostController@drop')->name('posts.drop');
Route::get('/testUsers/prune', 'HomeController@pruneTestUsers')->name('testusers.prune');

Route::get('/users', 'FollowController@index');
Route::get('/users/drop', 'HomeController@dropUsers')->name('users.drop');
Route::post('/follow', 'FollowController@store')->name('user.follow');
Route::delete('/follow/{follow}', 'FollowController@destroy');

Route::get('/feed', 'FeedController@index');
Route::get('/feed/like/{type}/{id}', 'LikeController@like')->name('activity.like');
Route::get('/feed/unlike/{type}/{id}', 'LikeController@unlike')->name('activity.unlike');