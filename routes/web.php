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

Route::get('/', 'PageController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('forums', 'ForumController');
Route::resource('thread', 'ThreadController');
Route::resource('post', 'PostController');
Route::get('user/{id}/', 'PageController@user');
Route::get('search/{id}/', 'PageController@search');
