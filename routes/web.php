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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('contact', 'StaticPagesController@contact')->name('contact');
Route::get('about', 'StaticPagesController@about')->name('about');
Route::get('form', 'StaticPagesController@form')->name('form');
Route::post('post_validate', 'StaticPagesController@post_validate')->name('form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('form2', 'StaticPagesController@form2')->name('form2');
Route::post('form2_validate', 'StaticPagesController@form2_validate')->name('form2_validate');
Route::get('propaganda', 'StaticPagesController@propaganda')->name('propaganda');
