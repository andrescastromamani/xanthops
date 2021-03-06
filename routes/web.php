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
Route::resource('users','UserController')->names('users');
Route::get('users.index','PdfController@pdf')->name('users.pdf');
Route::get('users.excel','PdfController@excel')->name('users.excel');
Route::post('users.import.excel','PdfController@excelImport')->name('users.import.excel');
/*Post*/
Route::resource('users.posts','PostController');
/*Note*/
/*
Route::group(['prefix'=>'api'], function (){
    Route::apiResource('notes','Api\NoteController')->except('create','edit');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
