<?php

Class Agendaratendimento extends Eloquent{

	protected $table = 'agendaratendimentos';

	public function peoplereference()
	{
		return $this->hasOne('Peoplesreference');
	}

	public function validate($data)
	{
		$rules = array(
			'rendatotal' => "required",
			'anosmoraestado' => "required",
			'anosmoramunicipio' => "required",
			'anosmorabairro' => "required",
			'tipo' => "required",
			);

		return Validator::make($data,$rules);
	}
}