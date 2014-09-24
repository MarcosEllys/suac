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

		$this->layout->content = View::make('unidades.index',$vars);

	}

	public function create()
	{
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

		$validator = $this->unidade->validate(Input::all());


		if ($validator->passes()) {

			$unidade->save();

			return Redirect::action('UnidadesController@index');

		} else {

			return Redirect::to('unidades/create')->withInput()->withErrors($validator);
		}

	}

	public function show($id)
	{

		$result = Unidade::find($id);

		$vars = array('unidade' => $result);

		$this->layout->content = View::make('unidades.show',$vars);

	}

	public function edit($id)
	{
		$unidade = Unidade::find($id);

		$vars = array('unidade' => $unidade);

		$this->layout->content = View::make('unidades.edit',$vars);
	}

	public function handleEdit()
	{

		$unidade = Unidade::findOrFail(Input::get('id'));

		$unidade->nome = Input::get('nome');
		$unidade->rua = Input::get('rua');
		$unidade->bairro = Input::get('bairro');		
		$unidade->numero = Input::get('numero');
		$unidade->complemento = Input::get('complemento');
		$unidade->tipo = Input::get('tipo');

		$validator = $this->unidade->validate(Input::all());

		if ($validator->passes()) {

			$unidade->save();

			return Redirect::action('UnidadesController@index');

		} else {

			return Redirect::to('unidades/edit/'.$unidade->id)->withInput()->withErrors($validator);
		}

	}

	public function delete($id)
	{

		$result = Unidade::find($id);

		$vars = array('unidade' => $result);

		$this->layout->content = View::make('unidades.delete',$vars);
	}

	public function handleDelete()
	{

		$id = Input::get('id');

		$unidade = Unidade::findOrFail($id);

		$unidade->delete();

		return Redirect::action('UnidadesController@index');

	}


}

