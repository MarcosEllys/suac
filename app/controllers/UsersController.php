<?php

class UsersController extends BaseController{

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function validate()
	{

		$userdata = array(
			'username' 	=> Input::get('username'),
			'password' 	=> Input::get('password')
			);

		$validator = $this->user->validate($userdata);

		if ($validator->passes()) {

			if (Auth::attempt($userdata)) {
				return Redirect::action('HomeController@showWelcome');
			} else {
				
				return Redirect::to('login')
				->withInput()
				->withErrors('Usuário e/ou Senha errados');

			}

		} else {

			return Redirect::to('login')->withInput()->withErrors($validator);

		}
	}

	public function login()
	{
		if (Auth::User()){
			return Redirect::to('/');
		} else {
			return View::make('users.login');
		}
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::action('HomeController@showWelcome');;
	}

	public function perfil()
	{

		$this->layout->content = View::make('users.perfil');
	}
	
	public function index()
	{

		$query = User::paginate(5);

		$vars = array('users' => $query);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type );

		$this->layout->content = View::make('users.index',$vars);

	}


	public function create()
	{
		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

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
		$user->password = Hash::make(Input::get('password'));
		$user->password_confirmation = Hash::make(Input::get('password_confirmation'));
		$user->email = Input::get('email');
		$user->is_admin = Input::get('is_admin');
		$user->cep = Input::get('cep');

		$user->bairro = Input::get('bairro');
		$user->rua = Input::get('rua');
		$user->numero = Input::get('numero');
		$user->complemento = Input::get('complemento');
		$user->pointreferencia  = Input::get('pointreferencia');

		$validator = $this->user->validation(Input::all());

		if ($validator->passes()) {

			$mycep =  CepConsult::getAddress(Input::get('cep'));

			$user->uf = $mycep['state'];
			$user->cidade = $mycep['city'];

			$user->save();

			return Redirect::action('UsersController@index');

		} else {

			return Redirect::to('users/create')->withInput()->withErrors($validator);
		}

		

	}

	public function delete($id)
	{

		$result = User::find($id);

		$vars = array('users' => $result);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('users.delete',$vars);
	}

	public function handleDelete()
	{

		$id = Input::get('id');

		$user = User::findOrFail($id);

		$user->delete();

		return Redirect::action('UsersController@index');

	}

	public function show($id)
	{

		$result = User::find($id);

		$vars = array('users' => $result);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('users.show',$vars);

	}

	public function edit($id)
	{
		$user = User::find($id);

		$vars = array('users' => $user);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);
		
		$this->layout->content = View::make('users.edit',$vars);

	}

	public function handleEdit()
	{

		$user = User::findOrFail(Input::get('id'));

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
		$user->password = Hash::make(Input::get('password'));
		$user->password_confirmation = Hash::make(Input::get('password_confirmation'));
		$user->email = Input::get('email');
		$user->is_admin = Input::get('is_admin');
		$user->cep = Input::get('cep');

		$user->bairro = Input::get('bairro');
		$user->rua = Input::get('rua');

		$user->numero = Input::get('numero');
		$user->complemento = Input::get('complemento');
		$user->pointreferencia  = Input::get('pointreferencia');

		$validator = $this->user->validation(Input::all());

		if ($validator->passes()) {

			$mycep =  CepConsult::getAddress(Input::get('cep'));

			$user->uf = $mycep['state'];
			$user->cidade = $mycep['city'];

			$user->update();

			return Redirect::action('UsersController@index');

		} else {

			return Redirect::to('users/edit/'.$user->id)->withInput()->withErrors($validator);
		}

	}



}