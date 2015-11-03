<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function email()
	{
		return $this->hasMany("Email");
	}

	public function info()
	{
		return $this->first_name.' '.$this->last_name.' '.$this->graduate();
	}

	public function graduate()
	{
		if($this->grade == 9)
		{
			return "'19";
		}

		if($this->grade == 10)
		{
			return "'18";
		}

		if($this->grade == 11)
		{
			return "'17";
		}

		if($this->grade == 12)
		{
			return "'16";
		}
	}

}
