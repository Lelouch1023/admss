<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', 'Api\Auth\RegisterController@register');
Route::post('/login', 'Api\Auth\LoginController@login');
Route::post('/logout', 'Api\Auth\LoginController@logout');
Route::post('/refresh', 'Api\Auth\LoginController@refresh');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/auth', 'APIController@auth');

Route::middleware('auth:api')->group(function () {
	// Route::get('/upload', 'Api\UploadController@create');
    Route::post('/logout', 'Api\Auth\LoginController@logout');
    //Route::get('/posts', 'Api\PostController@index');

});