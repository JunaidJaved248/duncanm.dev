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

Route::get('/', 'PostController@index')
    ->name('posts.index');

Route::get('/about', 'AboutController')
    ->name('about');

Route::get('/{post}', 'PostController@show')
    ->name('posts.show');
