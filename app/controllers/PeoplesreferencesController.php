<?php

class PeoplesreferencesController extends BaseController{

	protected $layout = '/layout.master';

	public function index()
	{
		$queryResult = Peoplesreference::all();

		$vars = array('peoplesreferences' => $queryResult);

		$this->layout->content = View::make('peoplesreference/index',$vars);
	}

	public function create()
	{
		$this->layout->content = View::make('peoplesreference/create');
	}

	public function store()
	{
		$peoplesreference = new Peoplesreference();

		$peoplesreference->name = Input::get('name');
		$peoplesreference->apelido = Input::get('apelido');
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

		$peoplesreference->save();

		return Redirect::action('PeoplesreferencesController@index');
	}

	public function show($id)
	{
		$result = Peoplesreference::find($id);

		$vars = array('people' => $result);

		$this->layout->content = View::make('products.show',$vars);
	}

}