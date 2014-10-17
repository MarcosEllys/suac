<?php

class Unidade extends Eloquent {

	protected $table = 'unidades';

	public function peoplesreferences()
	{
		return $this->hasMany('peoplesreferences');
	}

	public function validate($id,$data)
	{
		$rules = array(
			'nome' => "unique:unidades,nome,{$id}|required|between:5,40",
			'rua' => "required|between:1,35",
			'bairro' => "required|between:3,30",
			'numero' => "required|numeric|digits_between:2,4",
			'tipo' => "required",
			);

		return Validator::make($data,$rules);
	}

}