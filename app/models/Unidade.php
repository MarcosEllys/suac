<?php

// use LaravelBook\Ardent\Ardent;

class Unidade extends Eloquent {

	protected $table = 'unidades';

	public function peoplesreferences()
	{
		return $this->hasMany('peoplesreferences');
	}

	public static $rules = array(
		'nome' => 'required|between:5,40',
		'rua' => 'required|between:1,35',
		'bairro' => 'required|between:5,30',
		'numero' => 'required|numeric|digits_between:2,4',
		'tipo' => 'required',
		);

	public function validate($data)
	{
		return Validator::make($data,self::$rules);
	}

}