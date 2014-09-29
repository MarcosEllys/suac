<?php

// use LaravelBook\Ardent\Ardent;

class Unidade extends Eloquent {

	protected $table = 'unidades';

	public function peoplesreferences()
	{
		return $this->hasMany('peoplesreferences');
	}

	public static $rules = array(
		'nome' => 'unique:unidades|required|between:5,40',
		'rua' => 'unique:unidades|required|between:5,35',
		'bairro' => 'unique:unidades|required|between:5,30',
		'numero' => 'unique:unidades|required|numeric|digits_between:2,4',
		'tipo' => 'required',
		);

	public function validate($data)
	{
		return Validator::make($data,self::$rules);
	}

}