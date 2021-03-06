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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@findaction');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/uploads', 'PagesController@uploads')->name('uploads');
Route::get('/all_files', 'PagesController@all_files')->name('all_files');
Route::post('/all_files', 'PagesController@loadfiles');
Route::get('/myarea', 'PagesController@assignedArea');
Route::get('/bin', 'PagesController@bin')->name('bin');
Route::get('/archive', 'PagesController@archive')->name('archive');
Route::post('/archive', 'PagesController@loaddropdown');
Route::post('/mnltag', 'TagsController@manualtag');
Route::post('/movefile', 'TagsController@move');

Route::get('dl/{file}', 'UploadController@dl');

Route::post('/unarchv', 'TagsController@unarchive');
Route::get('/pending', 'PagesController@pending')->name('pending');
Route::get('/deluser/{user}', 'AdminController@deluser');
Route::get('uploads/view/{file}', 'PagesController@viewfile');
// Routes for Mobile
Route::get('/mobile/home', 'PagesController@mobile')->name('mobile');

Route::get('getRequest', function(){
	if(Request::ajax()){
		return 'getRequest has fully loaded!';
	}
});	
 
Route::get('viewpdf/{id}', 'PagesController@viewpdf');
//Route::resource('post', 'UploadController');
 
Auth::routes();
 
 
Route::get('/markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
 
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PagesController@home')->name('home');

Route::get('/search', 'UploadController@search');
Route::get('/result', 'UploadController@result')->name('result');
Route::get('/mobile/result', 'UploadController@mobile_result')->name('mobile_result');
Route::get('/assignedArea', 'PagesController@assignedArea')->name('assignedArea');
Route::get('/viewfile', 'PagesController@viewfile')->name('viewfile');
Route::get('/upload', 'UploadController@create');
Route::post('/upload', 'UploadController@store');
Route::get('/uploads/view/{id}', 'UploadController@view');
Route::get('/delete/{id}', 'UploadController@delete');
Route::get('/restore/{id}', 'UploadController@restore');
Route::get('/destroy/{id}', 'UploadController@destroy');
Route::get('/uploads/edit/{id}', 'UploadController@edit');
Route::put('/uploads/edit/{id}', 'UploadController@update')->name('updatefile');

Route::get('/test', 'UploadController@test');
 
Route::get('/{area}/{param}/{id}', 'PagesController@viewarea');
 
Route::get('/area1', 'PagesController@area1')->name('area1');
Route::get('/area2', 'PagesController@area2')->name('area2');
Route::get('/area3', 'PagesController@area3')->name('area3');
Route::get('/area4', 'PagesController@area4')->name('area4');
Route::get('/area5', 'PagesController@area5')->name('area5');
Route::get('/area6', 'PagesController@area6')->name('area6');
Route::get('/area7', 'PagesController@area7')->name('area7');
Route::get('/area8', 'PagesController@area8')->name('area8');
Route::get('/area9', 'PagesController@area9')->name('area9');
Route::get('/area10', 'PagesController@area10')->name('area10');
Route::get('/tags', 'PagesController@tags')->name('tags');
 
Route::get('/logout', 'HomeController@logoutreg')->name('getLogout'); 
Route::post('/tag', 'TagsController@store');
Route::post('/keyword', 'TagsController@addKeyword');
Route::post('/pending', 'PagesController@approvetag');

Route::get('/mobile/login', 'Mobile\Auth\LoginController@showLogInForm');