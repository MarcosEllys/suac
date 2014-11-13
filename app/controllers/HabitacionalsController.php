<?php

class HabitacionalsController extends BaseController{

	protected $habitacional;

	public function __construct(Habitacional $habitacional){

		$this->habitacional = $habitacional;

	}

	public function habitacional()
	{
		return $this->hasOne('familys');
	}



	public function handleEdit()
	{

		$habitacional = Habitacional::find(Input::get('id'));

		$validator = $this->habitacional->validate(Input::all());

		if ($validator->passes()) {

			$habitacional->tiporesidencia = Input::get('tiporesidencia');
			$habitacional->materialparedes = Input::get('materialparedes');
			$habitacional->energia = Input::get('energia');
			$habitacional->agua = Input::get('agua');
			$habitacional->esgoto = Input::get('esgoto');
			$habitacional->coletalixo = Input::get('coletalixo');
			$habitacional->localizadoareadesabamento = Input::get('localizadoareadesabamento');
			$habitacional->localizadoareadificilacesso = Input::get('localizadoareadificilacesso');			
			$habitacional->qtdcomodos = Input::get('qtdcomodos');
			$habitacional->qtdcomodos = Input::get('qtddormitorios');
			$habitacional->observacao = Input::get('observacao');
			$habitacional->energia = Input::get('energia');
			

			$habitacional->update();

			return Redirect::action('FamilysController@index')
			->with('MessageInfo','Dados sobre habitacional alterados com sucesso');

		} else {

			return Redirect::to('family/edit/'.$habitacional->id)
			->withInput()
			->withErrors($validator);
		}

	}	
}