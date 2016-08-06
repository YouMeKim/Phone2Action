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
Route::get('admin/login', 'PagesController@login');
Route::post('admin/petitions/', 'PetitionsController@store');
Route::get('admin/petitions/create', 'PetitionsController@create');
Route::get('admin/petitions/{petition}/edit', 'PetitionsController@edit');
Route::patch('admin/petitions/{petition}', 'PetitionsController@update');
Route::delete('admin/petitions/{petition}', 'PetitionsController@delete');
Route::get('admin/petitions/{petition}/delete', 'PetitionsController@delete');

Route::get('petitions', 'PetitionsController@index');
Route::get('petitions/{petition}', 'PetitionsController@show');
Route::post('petitions/{petition}/signatures', 'PetitionsController@storeSignature');
