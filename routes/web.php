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
Route::get('users', 'HomeController@index')->name('users.index');
Route::get('users/{id}/edit', 'HomeController@edit')->name('users.edit');
Route::put('users/{id}', 'HomeController@update' )->name('users.update');
Route::delete('users/{id}', 'HomeController@destroy')->name('users.destroy');

/*Post*/
Route::get('post/{id}','homeController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
