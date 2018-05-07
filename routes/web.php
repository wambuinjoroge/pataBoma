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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('landing.index');
//});


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/modal', function () {
    return view('layouts.image');
});

Auth::routes();

Route::get('/homes', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index');
//how should my homepage look like what is a homepage

//users
Route::get('/users', 'UserController@index');
Route::post('create/user', 'UserController@store');
Route::get('/create/user', 'UserController@create');
Route::get('user','UserController@getUser');

//roles
Route::get('/roles', 'RoleController@index');
Route::post('create/role/{id}', 'RoleController@store');
Route::get('/create/role/{id}', 'RoleController@create');

//houses
Route::get('/houses', 'HouseController@index');
Route::post('create/house', 'HouseController@store');
Route::get('/create/house', 'HouseController@create');
Route::get('/house/{id}', 'HouseController@show');
Route::get('edit/house/{id}', 'HouseController@edit');
Route::post('edit/house/{id}', 'HouseController@update');
Route::get('/house/delete/{id}', 'HouseController@destroy');

