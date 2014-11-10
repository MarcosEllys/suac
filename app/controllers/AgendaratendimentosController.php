<?php

Class AgendaratendimentosController extends BaseController{

	protected $atendimento;

	public function __construct(Agendaratendimento $atendimento)
	{
		$this->atendimento = $atendimento;
	}


	public function index()
	{

		$query = Agendaratendimento::paginate(5);

		$vars = array('agendamentos' => $query);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('agendaratendimentos.index',$vars);

	}

	public function create()
	{
		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);
		
		$this->layout->content = View::make('agendaratendimentos.create');
	}

	public function store()
	{

		$validator = $this->unidade->validate(null,Input::all()); 

		if ($validator->passes()) {

			$unidade = new Unidade();

			$unidade->nome = Input::get('nome');
			$unidade->rua = Input::get('rua');
			$unidade->bairro = Input::get('bairro');		
			$unidade->numero = Input::get('numero');
			$unidade->complemento = Input::get('complemento');
			$unidade->tipo = Input::get('tipo');

			$unidade->save();

			return Redirect::action('UnidadesController@index')
			->with('MessageSuccess','Unidade criada com sucesso');

		} else {

			return Redirect::to('unidades/create')->withInput()->withErrors($validator);
		}

	}

	public function show($id)
	{

		$result = Unidade::find($id);

		$vars = array('unidade' => $result);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('unidades.show',$vars);

	}

	public function edit($id)
	{
		$unidade = Unidade::find($id);

		$vars = array('unidade' => $unidade);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('unidades.edit',$vars);
	}

	public function handleEdit()
	{
		$unidade = Unidade::findOrFail(Input::get('id'));

		$validator = $this->unidade->validate(Input::get('id'),Input::all());

		if ($validator->passes()) {


			$unidade->nome = Input::get('nome');
			$unidade->rua = Input::get('rua');
			$unidade->bairro = Input::get('bairro');		
			$unidade->numero = Input::get('numero');
			$unidade->complemento = Input::get('complemento');
			$unidade->tipo = Input::get('tipo');

			$unidade->update();

			return Redirect::action('UnidadesController@index')
			->with('MessageInfo','Unidade alterada com sucesso');

		} else {

			return Redirect::to('unidades/edit/'.$unidade->id)
			->withInput()
			->withErrors($validator);
		}

	}

	public function delete($id)
	{

		$result = Unidade::find($id);

		$vars = array('unidade' => $result);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('unidades.delete',$vars);
	}

	public function handleDelete()
	{

		$id = Input::get('id');

		$unidade = Unidade::findOrFail($id);

		$unidade->delete();

		return Redirect::action('UnidadesController@index')
		->with('MessageDelete','Unidade excluida com sucesso');;

	}

}