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
	 * Metódo de validação para inserção e manipulação de usuário
	 *
	 * @var array com regras de validação.
	 * @return validor check.
	 */


	public static $rules = array(
		'nome' => 'required|between:2,20',
		'sexo' => 'required',
		'nascimento' => 'required',
		'cpf' => array('required','cpf'),
		'rg' => 'required|numeric',
		'orgaorg' => 'required',
		'ufrg' => 'required',
		'emitedrg' => 'required',
		'username' => 'alpha_num|required|between:4,20',
		'email' => 'required|email',
		'password' => 'required',
		'password' => 'confirmed',
		'is_admin' => 'required',
		'rua' => 'required',
		'bairro' => 'required|between:5,20',
		'cep' => 'required|numeric'
		);

	public static $messages = array(
		'cpf' => 'cpf inválido',
		);

	public function validation($data)
	{
		return Validator::make($data,self::$rules,self::$messages);
	}

	/**
	 * Metódo de validação para efetuar login
	 *
	 * @var array com regras de validação.
	 * @return validor check.
	 */

	public static $RulesLogin = array(
		'username' => 'alpha_num|required|between:4,20',
		'password' => 'required|between:4,20',
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
