<?php

Class Agendaratendimento extends Eloquent{

	protected $table = 'agendaratendimentos';

	public function peoplesreference()
	{
		return $this->belongsTo('Peoplesreference');
	}

	public function validate($data)
	{
		$rules = array(
			'atendimento' => "required",
			'tipoatendimento' => "required"
			);

		return Validator::make($data,$rules);
	}
}