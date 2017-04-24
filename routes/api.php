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

/*
 *
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::group(['prefix'=>'users'],function(){
    Route::post('','UserController@store');
    Route::get('{id}','UserController@show')->where('id','^[0-9]+$');
    Route::put('{id}','UserController@update')->where('id','^[0-9]+$');
    Route::delete('{id}','UserController@destroy')->where('id','^[0-9]+$');
});