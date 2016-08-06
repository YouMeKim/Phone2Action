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


Route::get('/', 'PagesController@home');

Route::get('admin', 'PagesController@admin');

Route::get('petitions', 'PetitionsController@index');
Route::get('petitions/{petition}', 'PetitionsController@show');
Route::post('petitions/{petition}/signatures', 'PetitionsController@storeSignature');
