<?php

	class UnidadesController extends BaseController{

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


			$rules = array(
				'nome' => 'required|alpha|between:5,40',
				'rua' => 'required|between:5,35',
				'bairro' => 'required|between:5,30',
				'numero' => 'required|numeric',
				'tipo' => 'required'
				);

			$validator = Validator::make(Input::all(), $rules);

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

		$rules = array(
				'nome' => 'required|alpha|between:5,40',
				'rua' => 'required|between:5,35',
				'bairro' => 'required|between:5,30',
				'numero' => 'required|numeric',
				'tipo' => 'required'
				);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->passes()) {

				$unidade->save();

				return Redirect::action('UnidadesController@index');

			} else {

				return Redirect::to('unidades/create')->withInput()->withErrors($validator);
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

		return Redirect::to('/unidades');

	}

		
		}
