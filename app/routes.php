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

	Route::get('/approval', array('as' => 'user.activation.wait', 'uses' => 'AuthController@approval'));

	Route::get('/logout', array('as' => 'user.logout', 'uses' => 'AuthController@logout'));

	Route::post('/login', array('as' => 'user.login.handle', 'uses' => 'AuthController@handleLogin'));
	
	Route::post('/register', array('as' => 'user.register.handle', 'uses' => 'AuthController@handleRegister'));
});

Route::group(array('prefix' => 'm'), function(){
	
	Route::get('/email', array('as' => 'email', 'uses' => 'EmailController@email'));

	Route::get('/sent', array('as' => 'api.email', 'uses' => 'EmailController@sent'));

	Route::post('/email', array('as' => 'email.send', 'uses' => 'EmailController@sendEmail'));
});

Route::group(array('prefix' => 'user'), function(){
	
	Route::get('leaderboards', array('as' => 'rank.view', 'uses' => 'UserController@rank'));

	Route::post('announce', array('as' => 'announce.send', 'uses' => 'EmailController@announce'));

	//Route::get('admin/{code}', array('as' => 'admin.activate', 'uses' => 'AuthController@activate'));

});

Route::group(array('prefix' => 'activate'), function(){
	
	Route::get('{code}', array('as' => 'user.activate', 'uses' => 'AuthController@fakeActivate'));

	Route::get('admin/{code}', array('as' => 'admin.activate', 'uses' => 'AuthController@activate'));

});

Route::get('/', function(){
	return Redirect::route('user.login.view');
});

Route::get('template', 'HomeController@template');

Route::get('/main', 'HomeController@main');

