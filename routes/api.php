<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/app','AppController@index');
Route::post('/save','AppController@store');
Route::get('/userget','LoginController@index');
Route::post('/userpost','LoginController@store');
Route::get('/userget','SignupController@index');
Route::post('/signuppost','SignupController@store');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
