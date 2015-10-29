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
		return View::make('main');
	}

	public function email()
	{
		return View::make('email');
	}

	public function sendEmail()
	{
		$input = Input::all();
		$user = Sentry::getUser();
		$input['user'] = $user;
		$email = $input['email'];
		Mail::send('emails.sponsor', $input, function($message) use ($email)
		{
		    $message->to("$email")->subject('hackGFS - Philadelphia\'s First Highschool Hackathon!');
		});

		dd($input);
	}

}
