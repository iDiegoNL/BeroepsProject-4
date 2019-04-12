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

Route::get('/home', 'PostController@index')->name('home');
Route::post('/home', 'PostController@store')->name('post.store');

Route::get('/posts/drop', 'PostController@drop')->name('posts.drop');

//Route::get('/home', 'HomeController@index')->name('home');