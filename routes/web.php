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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 文章管理
Route::get('/article', 'ArticleController@index')->name('article')->middleware('auth');
Route::get('/article/show/{id?}', 'ArticleController@show')->where('id', '[0-9]+')->name('article/show')->middleware('auth');
Route::post('/article/edit', 'ArticleController@edit')->name('article/edit')->middleware('auth');
Route::get('/article/delete/{id?}', 'ArticleController@delete')->where('id', '[0-9]+')->name('article/delete')->middleware('auth');
