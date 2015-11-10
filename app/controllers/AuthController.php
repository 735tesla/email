<?php

class AuthController extends BaseController {

	public function login()
	{
		if(!is_null(Session::get('error')))
		{
			$error = Session::get('error');
			return View::make('auth/login')
				->with('error', $error);	
		}

		return View::make('auth/login');
	}

	public function handleLogin()
	{
		$input = Input::all();

		try {
			$user = Sentry::authenticate($input);	

			return Redirect::action("HomeController@main");
		} catch (Exception $e) {
			return Redirect::route('user.login.view')
				->with('error', $e->getMessage());
		}


	}

	public function logout()
	{
		Sentry::logout();

		return Redirect::route("user.login.view");
	}

	public function register()
	{
		if(!is_null(Session::get('error')))
		{
			$error = Session::get('error');
			return View::make('auth/register')
				->with('error', $error);	
		}

		return View::make('auth/register');
	}

	public function handleRegister()
	{
		$input = Input::all();
		//dd($input);
		$email = $input['email'];
		//$input['activated'] = 1;

		try {
			if (strpos($email, '@germantownfriends.org') == false) {
			    throw new Exception("'$email' is not a valid GFS email. Please enter a valid GFS email.");
			}

			$user = Sentry::register($input);

			$user->getActivationCode();

			$input['user'] = $user;
			
			Mail::send('emails.activate.user', $input, function($message) use ($email)
			{
			    $message->to("$email")->subject('hackGFS - Activate Your Account');
			});
			
		} catch (Exception $e) {
			return Redirect::route('user.register.view')
				->with('error', $e->getMessage());
		}

		return Redirect::action('user.login.view')
			->with('email', $email);
	}

	public function fakeActivate($code)
	{

		$user = User::where('activation_code', '=', $code)->first();

		$data = array('user' => $user, 'code' => $code);

		Mail::send('emails.activate.admin', $data, function($message) use ($user)
		{
		    $message->to("hackgfs.2015@gmail.com")->cc('ngansallo17@germantownfriends.org')->cc('jpickering17@germantownfriends.org')->subject('Activate '.$user->first_name);
		});

		return Redirect::route('user.activation.wait');
	}

	public function approval()
	{
		return View::make('auth/admin');
	}

	public function activate($code)
	{
		$user = User::where('activation_code', '=', $code)->first();

		$data = array('user' => $user);

		$email = $user->email;

		if(!$user->activated)
		{
			Mail::send('emails.activate.notification', $data, function($message) use ($email)
			{
			    $message->to("$email")->subject('hackGFS - You\'ve Been Activated!');
			});
		}

		$user->activated = 1;
		$user->save();
	}

}
