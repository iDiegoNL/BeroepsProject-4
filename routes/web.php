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
})->name('welcome');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'FeedController@index')->name('home');
Route::post('/home', 'PostController@store')->name('post.store');

Route::get('/posts/drop', 'PostController@drop')->name('posts.drop');
Route::get('/testUsers/prune', 'HomeController@pruneTestUsers')->name('testusers.prune');

Route::get('/users', 'FollowController@index');
Route::get('/users/drop', 'HomeController@dropUsers')->name('users.drop');
Route::get('/follow/{user}', 'FollowController@store')->name('user.follow');
Route::get('/unfollow/{user}', 'FollowController@destroy')->name('user.unfollow');

Route::get('/feed', 'FeedController@index');
Route::get('/feed/like/{type}/{id}', 'LikeController@like')->name('activity.like');
Route::get('/feed/unlike/{type}/{id}', 'LikeController@unlike')->name('activity.unlike');

Route::get('/p/{username}', 'ProfileController@show')->name('profile.show');
Route::get('/p/{username}/friends', 'ProfileController@friends')->name('profile.friends');

Route::get('/profile', 'UserController@edit');

Route::post('/profile', 'UserController@update');

// BandWalk Events

Route::get('/events', function () {
    return view('eventsearch.home');
})->name('eventsearch.home');

Route::get('/events/{genre}', 'EventController@index')->name('eventsearch.index');
Route::get('/event/{name}/{id}', 'EventController@show')->name('eventsearch.show');

Route::get('/venue/{name}/{id}', 'VenueController@show')->name('venues.show');

// Reservation
Route::get('/checkout/{id}', 'ReservationController@checkout')->name('reservations.checkout');

Route::post('/checkout/confirm/{id}', 'ReservationController@confirmReservation')->name('reservations.confirm');
Route::get('/checkout/store/{id}', 'ReservationController@storeReservation')->name('reservations.store');

// My Tickets
Route::get('/tickets', 'ReservationController@index')->name('reservations.index');

// Admin
Route::get('/admin', 'AdminController@home')->name('admin.home');
Route::get('/admin/events', 'AdminController@indexEvents')->name('admin.events.index');

Route::get('/admin/events/add', 'AdminController@addEvents')->name('admin.events.add');

Route::get('/admin/event/{id}/edit', 'AdminController@editEvent')->name('admin.event.edit');
Route::post('/admin/event/{id}/update', 'AdminController@updateEvent')->name('admin.event.update');

Route::get('/admin/event/{id}/delete', 'AdminController@deleteEvent')->name('admin.event.delete');

Route::get('/admin/reservations', 'AdminController@indexReservations')->name('admin.reservations');
Route::get('/admin/reservation/{id}/pdf', 'AdminController@getReservationPDF')->name('admin.reservation.pdf');

Route::get('/admin/users', 'AdminController@indexUsers')->name('admin.users');
Route::get('/admin/user/{id}/admin', 'AdminController@makeUserAdmin')->name('admin.user.makeadmin');
