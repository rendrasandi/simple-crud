<?php

use App\Http\Requests;
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

Route::get('/', 'BiodataController@index');

//Route::get('home', 'BiodataController@index');

Route::get('/biodata/success','BiodataController@success');
Route::get('/biodata/detail/{value}','BiodataController@detail');

//Route::get('/biodata/getdata/{value}', 'BiodataController@get_data');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::resource('biodata', 'BiodataController');
