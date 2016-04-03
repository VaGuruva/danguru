<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>'web'], function(){
Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', 'CarController');
Route::get('cars/show/{id}', 'CarController@show');
Route::get('cars/edit/{id}', 'CarController@edit');
Route::get('cars/create', 'CarController@create');
Route::get('cars/delete/{id}', 'CarController@destroy');
Route::auth();

Route::get('/home', 'HomeController@index');
});



