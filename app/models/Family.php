<?php

Class Family extends Eloquent {

	protected $table = 'familys';

	public function peoplereferences()
	{
		return $this->hasOne('Peoplesreference');
	}

	public function validate($data)
	{
		$rules = array(
			'anosmoraestado' => 'required'
			);

		return Validator::make($data,$rules);
	}
}