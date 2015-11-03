<?php


class EmailController extends BaseController {

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

		if(is_null(Email::where('email', '=', $email)->first()))
		{
			Mail::send('emails.sponsor', $input, function($message) use ($email)
			{
			    $message->to("$email")->subject('hackGFS - Philadelphia\'s First Highschool Hackathon!');
			});
			$email = new Email;

			$email->email = $input['email'];
			$email->company = $input['name'];
			$email->user_id = $user->id;
			$email->save();
		}


		return Redirect::back();
	}

	public function sent()
	{
		$loaded = Input::get('l');
		$emails = Email::where('created_at', '>', $loaded)->get();

		foreach ($emails as $email) {
			$email->author = $email->user->first_name.' '.$email->user->graduate();
		}
		
		return $emails;
	}


}