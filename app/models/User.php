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
	protected $hidden = ['password'];

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassowrd()
	{
		return $this->passowrd;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public static $rules = array(
		'username' => 'required',
		'password' => 'required',
		);

	public function validation($data)
	{
		return Validator::make($data,self::$rules);
	}
}
