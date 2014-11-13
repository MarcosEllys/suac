<?php

class PeoplesreferencesController extends BaseController{

	public $peoplesreference;

	public function __construct(Peoplesreference $peoplesreference)
	{
		$this->peoplesreference = $peoplesreference;
	}

	public function index()
	{

		$queryResult = Peoplesreference::where('desligado' , '=' , FALSE)->paginate(5);

		$vars = array('peoplesreference' => $queryResult);

		$queryTrue = Peoplesreference::where('desligado' , '=' , TRUE);

		$varsTrue = array('output' => $queryTrue);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type );

		$this->layout->content = View::make('peoplesreference.index')
		->with($vars)
		->with($varsTrue);
	}

	public function show($id)
	{
		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type);

		$this->layout->content = View::make('peoplesreference.show')->with($vars);
	}

	public function search()
	{
		$name = Input::get('nome');

		$result = Peoplesreference::where('nome', 'LIKE', '%'.$name.'%')->get();

		$vars = array('peoplesreference' => $result);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type );

		$this->layout->content = View::make('peoplesreference.search')->with($vars);

	}

	public function create()
	{
		$unidades = Unidade::all();

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type );

		$this->layout->content = View::make('peoplesreference.create')->with('unidades',$unidades);
	}

	public function store()
	{

		$validator = $this->peoplesreference->validate(null,Input::all());

		if ($validator->passes()) {

			$peoplesreference = new Peoplesreference();

			$peoplesreference->nome = Input::get('nome');
			$peoplesreference->apelido = Input::get('apelido');
			$peoplesreference->nascimento = Input::get('nascimento');		
			$peoplesreference->nomemae = Input::get('nomemae');
			$peoplesreference->nomepai = Input::get('nomepai');
			$peoplesreference->nis = Input::get('nis');
			$peoplesreference->cpf = Input::get('cpf');
			$peoplesreference->rg = Input::get('rg');
			$peoplesreference->orgaorg = Input::get('orgaorg');
			$peoplesreference->ufrg = Input::get('ufrg');
			$peoplesreference->emitedrg = Input::get('emitedrg');
			$peoplesreference->numeroprontuario = Input::get('numeroprontuario');
			$peoplesreference->cep = Input::get('cep');

			// $mycep =  CepConsult::getAddress(Input::get('cep'));

			// $peoplesreference->uf = $mycep['state'];
			// $peoplesreference->municipio = $mycep['city'];
			$peoplesreference->rua = Input::get('rua');
			$peoplesreference->bairro = Input::get('bairro');

			$peoplesreference->complemento = Input::get('complemento');
			$peoplesreference->pointreference = Input::get('pointreference');
			$peoplesreference->telefone1 = Input::get('telefone1');
			$peoplesreference->telefone2 = Input::get('telefone2');

			// Relationships

			$peoplesreference->unidade_id = Input::get('unidade_id');
			$peoplesreference->family_id = self::IncrementId();

			self::PersistenceFamilyPeopleReference();

			$peoplesreference->save();

			return Redirect::action('PeoplesreferencesController@index');

		} else {

			return Redirect::to('peoplesref/create')->withInput()->withErrors($validator);
		}

	}

	protected function IncrementId()
	{
		$peoples = DB::table('peoplesreferences')->count();

		return $peoples + 1;
	}

	protected function PersistenceFamilyPeopleReference()
	{

		/**
		* Instanciado uma nova familia e a salvando em
		*
		* conjunto com a pessoa referenciada
		*
		* @var object family;
		*
		* @return not return
		*
		**/

			$familia = new Family();
			$familia->completo = FALSE;
			$familia->save();

			$habitacional = new Habitacional();
			$habitacional->save();

	}

	public function edit($id)
	{
		$people = Peoplesreference::find($id);

		$unidades = Unidade::all();

		$vars = array('people' => $people);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type );

		$this->layout->content = View::make('peoplesreference.edit')
		->with($vars)
		->with('unidades',$unidades);
	}


	public function handleEdit()
	{

		$people = Peoplesreference::findOrFail(Input::get('id'));

		$validator = $this->peoplesreference->validate(Input::get('id'),Input::all());

		if ($validator->passes()) {

			$people->nome = Input::get('nome');
			$people->apelido = Input::get('apelido');
			$people->nascimento = Input::get('nascimento');		
			$people->nomemae = Input::get('nomemae');
			$people->nomepai = Input::get('nomepai');
			$people->nis = Input::get('nis');
			$people->cpf = Input::get('cpf');
			$people->rg = Input::get('rg');
			$people->orgaorg = Input::get('orgaorg');
			$people->ufrg = Input::get('ufrg');
			$people->emitedrg = Input::get('emitedrg');
			$people->numeroprontuario = Input::get('numeroprontuario');
			$people->unidade_id = Input::get('unidade_id');
			$people->cep = Input::get('cep');

			$mycep =  CepConsult::getAddress(Input::get('cep'));

			$people->uf = $mycep['state'];
			$people->municipio = $mycep['city'];
			$people->rua = Input::get('rua');
			$people->bairro = Input::get('bairro');

			$people->complemento = Input::get('complemento');
			$people->pointreference = Input::get('pointreference');
			$people->telefone1 = Input::get('telefone1');
			$people->telefone2 = Input::get('telefone2');

			$people->save();

			return Redirect::action('PeoplesreferencesController@index')
			->with('MessageInfo','Pessoa referenciada editada com sucesso');

		} else {

			return Redirect::to('peoplesref/edit/'.$people->id)->withInput()->withErrors($validator);
		}

	}

	public function delete($id)
	{

		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type);

		$this->layout->content = View::make('peoplesreference.delete')->with($vars);
	}

	public function handleDelete()
	{

		$people = Peoplesreference::findOrFail(Input::get('id'));
		$people->desligado = TRUE;
		$people->update();
		
		return Redirect::to('/peoplesref')->with('MessageInfo','Pessoa referenciada desligada com sucesso');

	}

	public function religar()
	{

		$people = Peoplesreference::findOrFail(Input::get('id'));
		$people->desligado = FALSE;
		$people->update();
		
		return Redirect::to('/peoplesref')->with('MessageInfo','Pessoa referenciada religada com sucesso');

	}

	public function desligadas()
	{

		$queryResult = Peoplesreference::where('desligado' , '=' , TRUE)->paginate(5);

		$vars = array('peoplesreference' => $queryResult);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type );

		$this->layout->content = View::make('peoplesreference.desligadas')->with($vars);
	}


}