<?php

class UsersController extends BaseController{

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function login(){

		return View::make('users.login');
	}

	
	public function index()
	{

		$query = User::paginate(5);

		$vars = array('users' => $query);

		$this->layout->content = View::make('users.index',$vars);

	}

	public function create()
	{
		$this->layout->content = View::make('users.create');
	}

	public function store()
	{

		$user = new User();

		$user->nome = Input::get('nome');
		$user->sexo = Input::get('sexo');
		$user->nascimento = Input::get('nascimento');		
		$user->cpf = Input::get('cpf');
		$user->rg = Input::get('rg');
		$user->orgaorg = Input::get('orgaorg');
		$user->ufrg = Input::get('ufrg');
		$user->emitedrg = Input::get('emitedrg');
		$user->telefone = Input::get('telefone');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->password_confirmation = Input::get('password_confirmation');
		$user->email = Input::get('email');
		$user->is_admin = Input::get('is_admin');
		$user->cep = Input::get('cep');

		$mycep =  CepConsult::getAddress(Input::get('cep'));

		$user->uf = $mycep['state'];
		$user->municipio = $mycep['city'];
		$user->bairro = Input::get('bairro');
		$user->rua = Input::get('rua');
		$user->numero = Input::get('numero');

		$user->complemento = Input::get('complemento');
		$user->pointreference = Input::get('pointreference');

		$user->save();

		return Redirect::action('UsersController@index');

		

	}

}