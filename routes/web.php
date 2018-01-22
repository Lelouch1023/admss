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
Route::get('/uploads', 'PagesController@uploads');
Route::get('/myarea', 'PagesController@assignedArea');
Route::get('/bin', 'PagesController@bin');
Route::get('/area2', 'PagesController@area2');
Route::get('/pending', 'PagesController@pending');


Route::resource('post', 'UploadController');

Auth::routes();


Route::get('/markAsRead', function(){
	auth()->user()->unreadNotifications->markAsRead();

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pending', 'PagesController@index')->name('pending');
Route::get('/search', 'UploadController@search');
Route::get('/result', 'UploadController@result')->name('result');
Route::get('/assignedArea', 'PagesController@assignedArea')->name('assignedArea');

Route::get('/upload', 'UploadController@create');

Route::get('/uploads/view/{id}', 'UploadController@view');
Route::get('/delete/{id}', 'UploadController@delete');
Route::get('/restore/{id}', 'UploadController@restore');
Route::get('/destroy/{id}', 'UploadController@destroy');
Route::get('/uploads/edit/{id}', 'UploadController@edit');
Route::get('/test', 'UploadController@test');
Route::get('/test2', 'UploadController@test2');
