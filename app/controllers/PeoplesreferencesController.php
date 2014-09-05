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
		$peoplesreference->name = Input::get('apelido');

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