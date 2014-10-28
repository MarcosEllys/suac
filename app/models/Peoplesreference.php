<?php

class Peoplesreference extends Eloquent{

	protected $table = 'peoplesreferences';

	public function unidade()
	{
		return $this->belongsTo('Unidade');
	}

	public function getUnidade()
	{
		return Unidade::where('id',$this->unidade_id)->first()->nome;
	}

	public static $rules = array(
		'nome' => 'required|between:10,60',
		'apelido' => 'required|between:4,13',
		'cpf' => 'required'
		
		);

	public static $messages = array(
		'cpf' => 'cpf inválido',
		);


	public function validate($data)
	{
		return Validator::make($data,self::$rules,self::$messages);
	}	
}