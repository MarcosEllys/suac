<?php

Class FamilysController extends BaseController{

	protected $family;

	public function __construct(Family $family)
	{
		$this->family = $family;
	}

	public function index()
	{

		$queryResult = Family::paginate(5);

		$vars = array('familias' => $queryResult);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type );

		$this->layout->content = View::make('familia.index',$vars);

	}

	public function show($id)
	{

		$queryFamily = Family::find($id);

		$familia = array('familia' => $queryFamily);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type);

		$this->layout->content = View::make('familia.show')->with($familia);

	}

	public function edit($id)
	{
		$queryFamily = Family::find($id);

		$familia = array('familia' => $queryFamily);

		$queryHabitacional = Habitacional::find($id);

		$habitacional = array('habitacional' => $queryHabitacional);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type);

		$this->layout->content = View::make('familia.edit')
		->with($familia)
		->with($habitacional);

	}

	public function handleEdit()
	{
		$familia = Family::findOrFail(Input::get('id'));

		$validator = $this->family->validate(Input::all());

		if ($validator->passes()) {


			$familia->rendatotal = Input::get('rendatotal');
			$familia->anosmoraestado = Input::get('anosmoraestado');
			$familia->anosmoramunicipio = Input::get('anosmoramunicipio');
			$familia->anosmorabairro = Input::get('anosmorabairro');

			$familia->update();

			return Redirect::action('FamilysController@index')
			->with('MessageInfo','Família alterada com sucesso');

		} else {

			return Redirect::to('family/edit/'.$familia->id)
			->withInput()
			->withErrors($validator);
		}

	}

}