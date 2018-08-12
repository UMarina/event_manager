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
Route::get('/', 'EventController@index')->name('events');
Route::get('/{id}', 'EventController@showEvent')->name('events.show');
Route::get('{event_id}/users/create/', 'UserController@createUser')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');