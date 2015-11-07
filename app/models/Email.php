<?php

class Email extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'emails';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function since()
	{
		$since = Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
		return $since;
	}


}
