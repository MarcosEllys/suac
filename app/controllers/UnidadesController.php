<?php

class UnidadesController extends BaseController{

	protected $unidade;

	public function __construct(Unidade $unidade)
	{
		$this->unidade = $unidade;
	}


	public function index()
	{

		$query = Unidade::paginate(5);

		$vars = array('unidades' => $query);

		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('unidades.index',$vars);

	}

	public function create()
	{
		$type = array('active2' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);
		
		$this->layout->content = View::make('unidades.create');
	}

	public function store()
	{

		$unidade = new Unidade();

		$unidade->nome = Input::get('nome');
		$unidade->rua = Input::get('rua');
		$unidade->bairro = Input::get('bairro');		
		$unidade->numero = Input::get('numero');
		$unidade->complemento = Input::get('complemento');
		$unidade->tipo = Input::get('tipo');

		$validator = $this->unidade->validate(null,Input::all()); 

		if ($validator->passes()) {

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

		$id = Input::get('id');

		$validator = $this->unidade->validate($id,Input::all());

		if ($validator->passes()) {

			$unidade->nome = Input::get('nome');
			$unidade->rua = Input::get('rua');
			$unidade->bairro = Input::get('bairro');		
			$unidade->numero = Input::get('numero');
			$unidade->complemento = Input::get('complemento');
			$unidade->tipo = Input::get('tipo');

			$unidade->save();

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

