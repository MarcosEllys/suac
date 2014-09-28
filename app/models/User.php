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

	public static $RulesLogin = array(
		'username' => 'alpha_num|required|between:5,20',
		'password' => 'required|between:5,20',
		);

	public static $rules = array(
		'username' => 'alpha_num|required|between:5,20',
		'password' => 'required',
		);

	public function validate($data)
	{
		return Validator::make($data,self::$RulesLogin);
	}

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

}
