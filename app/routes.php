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

	Route::get('/logout', array('as' => 'user.logout', 'uses' => 'AuthController@logout'));

	Route::post('/login', array('as' => 'user.login.handle', 'uses' => 'AuthController@handleLogin'));
	
	Route::post('/register', array('as' => 'user.register.handle', 'uses' => 'AuthController@handleRegister'));
});

Route::group(array('prefix' => 'm'), function(){
	
	Route::get('/email', array('as' => 'email', 'uses' => 'EmailController@email'));

	Route::get('/sent', array('as' => 'api.email', 'uses' => 'EmailController@sent'));

	Route::post('/email', array('as' => 'email.send', 'uses' => 'EmailController@sendEmail'));
});

Route::get('/', function(){
	return Redirect::route('user.login.view');
});

Route::get('template', 'HomeController@template');

Route::get('/main', 'HomeController@main');

Route::get('mail', function(){
	return View::make('emails/sponsor')
		->with('name', 'Google')
		->with('user', Sentry::getUser());
});

