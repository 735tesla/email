<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('prefix' => 'auth'), function(){
	
	Route::get('/login', array('as' => 'user.login.view', 'uses' => 'AuthController@login'));
	
	Route::get('/register', array('as' => 'user.register.view', 'uses' => 'AuthController@register'));

	Route::post('/login', array('as' => 'user.login.handle', 'uses' => 'AuthController@handleLogin'));
	
	Route::post('/register', array('as' => 'user.register.handle', 'uses' => 'AuthController@handleRegister'));
});



Route::get('template', 'HomeController@template');
