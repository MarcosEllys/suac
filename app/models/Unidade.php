<?php

use LaravelBook\Ardent\Ardent;

class Unidade extends Ardent {

	protected $table = 'unidades';

	public static $rules = array(
		'nome' => 'required|between:5,40',
		'rua' => 'required|between:5,35',
		'bairro' => 'required|between:5,30',
		'numero' => 'required|numeric',
		'tipo' => 'required'
		);

}