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

	public function validate($id,$data)
	{
		$rules = array(
			'nome' => 'required|between:10,60',
			'apelido' => 'required|between:4,13',
			'rg' => 'unique:peoplesreferences,rg,{$id}|required'

			);

		$rules["cpf_cnpj"] = array("required","cpf");
		
		$messages["cpf_cnpj.cpf"] = 'Cpf inválido.';

		return Validator::make($data,$rules,$messages);
	}	
}