<?php

use Illuminate\Http\Request;
//use Illuminate\Routing\Route;

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


// this middleware mens it will first check the user
// if it found any user then it will process
// we will apply it in the 
// article CRUD route bellow

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// adding these five route pass the middleware
Route::group(['middleware' => 'auth:api'],function(){
    Route::get('articles','ArticleController@index');
    Route::get('articles/{id}','ArticleController@show');
    Route::post('articles','ArticleController@store');
    Route::put('articles/{id}','ArticleController@update');
    Route::delete('articles/{id}','ArticleController@delete');



});

// Register function goes here

Route::post("register","Auth\RegisterController@register");

//Login endpoint

Route::post("login","Auth\LoginController@login");