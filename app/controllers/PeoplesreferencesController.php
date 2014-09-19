<?php

class PeoplesreferencesController extends BaseController{

	public function index()
	{

		$queryResult = Peoplesreference::paginate(10);

		$vars = array('peoplesreference' => $queryResult);

		$this->layout->content = View::make('peoplesreference.index',$vars);
	}

	public function create()
	{
		$this->layout->content = View::make('peoplesreference.create');
	}

	public function store()
	{

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
		$peoplesreference->tipounidade = Input::get('tipounidade');
		$peoplesreference->nomeunidade = Input::get('nomeunidade');
		$peoplesreference->cep = Input::get('cep');

		$mycep =  CepConsult::getAddress(Input::get('cep'));

		if (exists($mycep)) {
			
			$peoplesreference->municipio = $mycep['city'];
			$peoplesreference->rua = Input::get('rua');
			$peoplesreference->bairro = Input::get('bairro');
			$peoplesreference->uf = $mycep['state'];

		} else {
			
			$peoplesreference->municipio = Input::get('municipio');
			$peoplesreference->rua = Input::get('rua');
			$peoplesreference->bairro = Input::get('bairro');
			$peoplesreference->uf = Input::get('uf');

		}

		$peoplesreference->complemento = Input::get('complemento');
		$peoplesreference->pointreference = Input::get('pointreference');
		$peoplesreference->telefone1 = Input::get('telefone1');
		$peoplesreference->telefone2 = Input::get('telefone2');
		$peoplesreference->localization = Input::get('localization');


		$rules = array(
			'nome' => 'required|alpha|between:10,60',
			'apelido' => 'required|between:11,13'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {

			$peoplesreference->save();

			return Redirect::action('PeoplesreferencesController@index');

		} else {

			return Redirect::to('peoplesref/create')->withInput()->withErrors($validator);
		}

	}

	public function edit($id)
	{
		$people = Peoplesreference::find($id);

		$vars = array('people' => $people);

		$this->layout->content = View::make('peoplesreference.edit',$vars);
	}

	public function handleEdit()
	{

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
		$peoplesreference->tipounidade = Input::get('tipounidade');
		$peoplesreference->nomeunidade = Input::get('nomeunidade');
		$peoplesreference->cep = Input::get('cep');

		$mycep =  CepConsult::getAddress(Input::get('cep'));

		if (exists($mycep)) {
			
			$peoplesreference->municipio = $mycep['city'];
			$peoplesreference->rua = Input::get('rua');
			$peoplesreference->bairro = Input::get('bairro');
			$peoplesreference->uf = $mycep['state'];

		} else {
			
			$peoplesreference->municipio = Input::get('municipio');
			$peoplesreference->rua = Input::get('rua');
			$peoplesreference->bairro = Input::get('bairro');
			$peoplesreference->uf = Input::get('uf');

		}

		$peoplesreference->complemento = Input::get('complemento');
		$peoplesreference->pointreference = Input::get('pointreference');
		$peoplesreference->telefone1 = Input::get('telefone1');
		$peoplesreference->telefone2 = Input::get('telefone2');
		$peoplesreference->localization = Input::get('localization');

		$people->save();

		return Redirect::to('/peoplesref');

	}

	public function show($id)
	{
		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$this->layout->content = View::make('peoplesreference.show',$vars);
	}

	public function delete($id)
	{

		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$this->layout->content = View::make('peoplesreference.delete',$vars);
	}

	public function handleDelete()
	{

		$id = Input::get('id');

		$people = Peoplesreference::findOrFail($id);

		$people->delete();

		return Redirect::to('/peoplesref');

	}

	public function search()
	{
		$name = Input::get('nome');

		$AllPeoples = Peoplesreference::paginate(10);

		$result = Peoplesreference::where('nome', 'LIKE', '%'.$name.'%')->paginate(1);


		$vars = array('peoplesreference' => $result);

		$this->layout->content = View::make('peoplesreference.search',$vars);

	}

}