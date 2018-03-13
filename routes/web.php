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

Route::group(['prefix'=>'/','namespace'=>'Login'],function(){
    Route::get('/',[
        'uses'=>'LoginController@index',
        'as'=>'index'
    ]);
    Route::get('/login',[
        'uses'=>'LoginController@login',
        'as'=>'login'
    ]);
});

Route::group(['prefix'=>'/user','namespace'=>'User'],function(){

    Route::POST('/store',[
        'uses'=>'UserController@register',
        'as'=>'register'
    ]);
    Route::PUT('/update',[
        'uses'=>'UserController@update',
        'as'=>'update'
    ]);
});
