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



Route::get('/login','ApiController@accessToken');

Route::group(['middleware' => ['web','auth:api']], function()

{

       Route::post('/house','ApiController@store');

       Route::get('/houses','ApiController@index');

       Route::get('/house/{id}','ApiController@show');

       Route::put('/house/{id}','ApiController@update');

       Route::delete('/house/{id}','ApiController@destroy');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




