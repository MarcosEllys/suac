<?php

class PeoplesreferencesController extends BaseController{

	public function index()
	{
		$queryResult = Peoplesreference::all();

		$queryResult = DB::table('peoplesreferences')->paginate(1);

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
		$peoplesreference->rua = Input::get('rua');
		$peoplesreference->bairro = Input::get('bairro');
		$peoplesreference->cep = Input::get('cep');
		$peoplesreference->municipio = Input::get('municipio');
		$peoplesreference->complemento = Input::get('complemento');
		$peoplesreference->pointreference = Input::get('pointreference');
		$peoplesreference->telefone1 = Input::get('telefone1');
		$peoplesreference->telefone2 = Input::get('telefone2');
		$peoplesreference->localization = Input::get('localization');

		$rules = array(
			'nome' => 'required|alpha|between:10,60',
			'apelido' => 'required|between:11,13'
			// 'apelido' => 'required|between:3,30',
			// // 'nis' => 'required|integer|between:4,4',
			);

		$rules["cpf_cnpj"] = array("required","cpf");

		$messages = array(
			'nome.between' => 'Nome completo porra'
			);

		$validator = Validator::make(Input::all(), $rules,$messages);

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

		$people = Peoplesreference::findOrFail(Input::get('id'));

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
		$people->tipounidade = Input::get('tipounidade');
		$people->nomeunidade = Input::get('nomeunidade');
		$people->rua = Input::get('rua');
		$people->bairro = Input::get('bairro');
		$people->cep = Input::get('cep');
		$people->municipio = Input::get('municipio');
		$people->complemento = Input::get('complemento');
		$people->pointreference = Input::get('pointreference');
		$people->telefone1 = Input::get('telefone1');
		$people->telefone2 = Input::get('telefone2');
		$people->localization = Input::get('localization');

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

	public function search($name){

		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$this->layout->content = View::make('peoplesreference.show',$vars);

	}

}