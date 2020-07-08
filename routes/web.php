<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{slug}','PostController@getPostBySlug')->name('detail_post');
Route::post('/comment/create','CommentController@createComment')->name('create_comment');
Route::get('/lien-he','ContactController@index');
Route::post('/contact/create','ContactController@create')->name('create_contact');
Route::get('/the-loai/{slug}','PostController@getPostByCategory');
Route::get('/search','PostController@search')->name('search_post');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
