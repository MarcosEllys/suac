<?php

// use LaravelBook\Ardent\Ardent;

class Unidade extends Eloquent {

	protected $table = 'unidades';

	public static $rules = array(
		'nome' => 'required|between:5,40',
		'rua' => 'required|between:5,35',
		'bairro' => 'required|between:5,30',
		'numero' => 'required|numeric',
		'tipo' => 'required'
		);

	public function validate($data)
	{
		return Validator::make($data,self::$rules);
	}

}