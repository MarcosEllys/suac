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


	public function validation($id,$data)
	{

		$rules = array(
			'nome' => "required",
			'sexo' => "required",
			'nascimento' => "required",
			'rg' => "required|min:5|numeric",
			'orgaorg' => "required",
			'ufrg' => "required",
			'emitedrg' => "required",
			'username' => "unique:users,username,{$id}|alpha_num|required|between:4,20",
			'email' => "required|email",
			'password' => "required",
			'password' => "confirmed",
			'is_admin' => "required",
			'rua' => "required",
			'bairro' => "required|between:5,20",
			'cep' => "required|numeric",
			'cpf' => array("required","cpf"),
			);

		$messages = array(
			'cpf' => 'cpf inválido',
			);

		return Validator::make($data,$rules,$messages);
	}

	/**
	 * Metódo de validação para efetuar login
	 *
	 * @var array com regras de validação.
	 * @return validor check.
	 */

	public static $RulesLogin = array(
		'username' => 'alpha_num|required|between:3,20',
		'password' => 'required|between:3,20',
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
