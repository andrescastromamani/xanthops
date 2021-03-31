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

/*Route::get('services/{id?}', function ($id = ""){
    return 'Services' .$id;
})->where('id', '[0-9]+');*/

Route::get('services', 'HomeController@services')->name('services');

Route::get('team/{name?}','HomeController@team')->name('team');

Route::get('contact','PagesController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
