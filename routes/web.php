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
})->name('welcome');

/*Route::get('services/{id?}', function ($id = ""){
    return 'Services' .$id;
})->where('id', '[0-9]+');*/

Route::get('services', function (){
    return view('services');
})->name('services');

Route::get('team/{name?}',function ($name = null){
    $teamWork = ['Andres','Fidel','Rimer','Daniel','Ariel'];
    //return view('team',['teamWork'=>$teamWork]);
    return view('team',compact('teamWork', 'name'));
})->name('team');
