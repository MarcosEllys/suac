<?php

class Peoplesreference extends Eloquent{

	protected $table = 'peoplesreferences';

	public static $rules = array(
		'nome' => 'required|alpha|between:10,60',
		'apelido' => 'required|between:11,13'
		);

	public function validate($data)
	{
		return Validator::make($data,self::$rules);
	}
	
}