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

	public function name()
	{
		return $this->first_name.' '.$this->last_name;
	}

	public function info()
	{
		return $this->first_name.' '.$this->last_name.' '.$this->graduate();
	}

	public function graduate()
	{
		$year = 28 - $this->grade;
		$year = "'".$year;

		return $year;
	}

	public function year()
	{
		if($this->grade == 9)
		{
			return "Freshman";
		}

		if($this->grade == 10)
		{
			return "Sophomore";
		}

		if($this->grade == 11)
		{
			return "Junior";
		}

		if($this->grade == 12)
		{
			return "Senior";
		}
	}

}
