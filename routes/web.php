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

Route::get('table_basic','HomeController@table_basic')->name('table_basic');

Route::get('table_data','HomeController@table_data')->name('table_data');

Route::post('table_data','HomeController@create')->name('create');

Route::get('/edit/{id}','HomeController@edit')->name('edit');

Route::put('/edit/{id}', 'HomeController@update' )->name('update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
