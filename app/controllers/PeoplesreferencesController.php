<?php

class PeoplesreferencesController extends BaseController{

	protected $layout = '/layout.master';

	public function index()
	{
		$queryResult = Peoplesreference::all();

		$queryResult = DB::table('peoplesreferences')->paginate(3);

		$vars = array('peoplesreference' => $queryResult);

		$this->layout->content = View::make('peoplesreference.index',$vars);
	}

	public function create()
	{
		$this->layout->content = View::make('peoplesreference.create');
	}

	public function store()
	{

		$data = Input::all();

		$peoplesreference = new Peoplesreference();

		$peoplesreference->name = Input::get('name');
		$peoplesreference->apelido = Input::get('apelido');
		$peoplesreference->datenascimento = Input::get('datenascimento');		
		$peoplesreference->namemather = Input::get('namemather');
		$peoplesreference->namefather = Input::get('namefather');
		$peoplesreference->nis = Input::get('nis');
		$peoplesreference->cpf = Input::get('cpf');
		$peoplesreference->rg = Input::get('rg');
		$peoplesreference->orgaorg = Input::get('orgaorg');
		$peoplesreference->ufrg = Input::get('ufrg');
		$peoplesreference->emitedrg = Input::get('emitedrg');
		$peoplesreference->numprontuario = Input::get('numprontuario');
		$peoplesreference->typeunity = Input::get('typeunity');
		$peoplesreference->nameunity = Input::get('nameunity');
		$peoplesreference->rua = Input::get('rua');
		$peoplesreference->logradouro = Input::get('logradouro');
		$peoplesreference->cep = Input::get('cep');
		$peoplesreference->municipio = Input::get('municipio');
		$peoplesreference->complemento = Input::get('complemento');
		$peoplesreference->pointreference = Input::get('pointreference');
		$peoplesreference->telephone1 = Input::get('telephone1');
		$peoplesreference->telephone2 = Input::get('telephone2');
		$peoplesreference->localization = Input::get('localization');

		$rules = array(
			'name' => 'required|alpha_num|min:5|max:32',
			'apelido' => 'required|between:5,7'
			);

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$peoplesreference->save();

			return Redirect::action('PeoplesreferencesController@index');

		}

		return Redirect::to('peoplesref/create')->withInput()->withErrors($validator);

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

		$people->name = Input::get('name');
		$people->apelido = Input::get('apelido');
		$people->datenascimento = Input::get('datenascimento');		
		$people->namemather = Input::get('namemather');
		$people->namefather = Input::get('namefather');
		$people->nis = Input::get('nis');
		$people->cpf = Input::get('cpf');
		$people->rg = Input::get('rg');
		$people->orgaorg = Input::get('orgaorg');
		$people->ufrg = Input::get('ufrg');
		$people->emitedrg = Input::get('emitedrg');
		$people->numprontuario = Input::get('numprontuario');
		$people->typeunity = Input::get('typeunity');
		$people->nameunity = Input::get('nameunity');
		$people->rua = Input::get('rua');
		$people->logradouro = Input::get('logradouro');
		$people->cep = Input::get('cep');
		$people->municipio = Input::get('municipio');
		$people->complemento = Input::get('complemento');
		$people->pointreference = Input::get('pointreference');
		$people->telephone1 = Input::get('telephone1');
		$people->telephone2 = Input::get('telephone2');
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

}