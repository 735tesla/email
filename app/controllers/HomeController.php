<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function template()
	{
		return View::make('template');
	}

	public function main()
	{
		$emails = Email::orderBy('created_at', 'desc')->get();

		$user = Sentry::getUser();

		return View::make('main')
			->with('user', $user)
			->with('emails', $emails);
	}


}
