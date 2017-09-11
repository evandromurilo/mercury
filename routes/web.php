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

Route::get('/', 'StaticPagesController@home');
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('contact', 'StaticPagesController@contact')->name('contact');
Route::get('about', 'StaticPagesController@about')->name('about');
Route::get('form', 'StaticPagesController@form')->name('form');
Route::post('post_validate', 'StaticPagesController@post_validate')->name('form');

Auth::routes();

Route::resource('ads', 'AdController');
Route::resource('users', 'UserController');
