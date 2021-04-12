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

Route::get('/', 'PagesController@index')->name('welcome');

Route::get('widgets','HomeController@widgets')->name('widgets');

Route::get('layouts','HomeController@layouts')->name('layouts');

/*User*/
Route::resource('users', 'UserController');
/*Post*/
Route::resource('posts','PostController');

Route::get('users/{id}/posts','homeController@post')->name('users.posts');

Route::get('users/{id}/post/create', 'HomeController@create')->name('post.create');

Route::post('users/{id}/posts', 'HomeController@postcreate')->name('postcreate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
