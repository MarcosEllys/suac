<?php

class Peoplesreference extends Eloquent{

	protected $table = 'peoplesreferences';

	public function unidades()
	{
		return $this->belongsTo('unidades');
	}

	public static $rules = array(
		'nome' => 'required|alpha|between:10,60',
		'apelido' => 'required|between:11,13',
		'cpf' => array('required','cpf'),
		);

	public static $messages = array(
		'cpf' => 'cpf inválido',
		);


	public function validate($data)
	{
		return Validator::make($data,self::$rules,self::$messages);
	}
	
}