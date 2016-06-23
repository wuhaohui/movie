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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','SiteController@index');

Route::get('/detail/{id}', 'DetailController@index');
Route::get('/detail/{id}.html{never}', 'DetailController@index');

Route::get('/cloudDisk/{disk_id}', 'CloudDiskController@index');
Route::get('/cloudDisk/{disk_id}.html', 'CloudDiskController@index');

Route::get('/show/{id}', 'ShowController@index');
Route::get('/show/{id}.html', 'ShowController@index');

//Route::get('/search/{type}/{param}', 'SearchController@index');
Route::get('/search/{type}/{param}.html', 'SearchController@index');