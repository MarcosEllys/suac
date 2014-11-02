<?php

class Peoplesreference extends Eloquent{

	protected $table = 'peoplesreferences';

	/**
	*
	* Relationships
	*
	**/

	public function unidade()
	{
		return $this->belongsTo('Unidade');
	}

	public function family()
	{
		return $this->belongsTo('Family');		
	}

	public function validate($id,$data)
	{
		$rules = array(
			'nome' => 'required|between:10,60',
			'apelido' => 'required|between:4,13',
			'rg' => 'unique:peoplesreferences,rg,{$id}|required',
			'cpf' => array("required","cpf"),
			);


			return Validator::make($data,$rules);
		}	
	}