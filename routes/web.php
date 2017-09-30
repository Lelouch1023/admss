<?php

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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/uploads', 'UploadController@uploads');
Route::get('/assignedArea', 'UploadController@assignedArea');
Route::get('/bin', 'UploadController@bin');

Route::get('/hello/{name}', function($name){

	return 'I am '.$name;
});

Route::resource('post', 'UploadController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
