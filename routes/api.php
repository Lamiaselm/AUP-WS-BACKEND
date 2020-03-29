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

Route::post('/register','Usercontroller@register');
Route::post('/login','Usercontroller@login');
Route::get('/profile','Usercontroller@getAuthenticatedUser');

Route::get('/mely/{id_app}','AppController@indexID');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
