<?php

class Habitacional extends Eloquent{

	protected $table='habitacionals';

	public function validate($data)
	{
		$rules = array(
			'tiporesidencia' => 'required|between:4,25',
			'materialparedes' => 'required|between:4,25',
			'qtdcomodos' => 'required|numeric|digits_between:1,2',
			'qtddormitorios' => 'required|numeric|digits_between:1,2'
			);

		return Validator::make($data,$rules);
	}
}