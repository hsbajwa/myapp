<?php

use Illuminate\Http\Request;
use \App\Http\Middleware\ModifyHeadersMiddleware;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();    
});
Route::group(['middleware' => 'auth:api'], function() {
Route::get('names', 'NamesController@index');
Route::get('names/{id}', 'NamesController@show');
Route::post('names', 'NamesController@store');
Route::put('names/{id}', 'NamesController@update');
Route::delete('names/{id}', 'NamesController@delete');
Route::get('oldnames', 'OldNamesController@index');
Route::get('oldnames/{user_id}', 'OldNamesController@show');
Route::post('oldnames', 'OldNamesController@store');
Route::delete('oldnames/{user_id}', 'OldNamesController@delete');
});
Route::group(['middleware' => 'cors'],function() {
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
});
