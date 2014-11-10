<?php

Class FamilysController extends BaseController{

	protected $family;

	public function __contruct(Family $family)
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

		$result = Family::find($id);

		$vars = array('familia' => $result);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('familia.show',$vars);

	}

	public function edit($id)
	{
		$familia = Family::find($id);

		$vars = array('familia' => $familia);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('familia.edit',$vars);

	}

	public function handleEdit()
	{

	}

}