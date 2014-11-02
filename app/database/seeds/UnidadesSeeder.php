<?php

class UnidadesSeeder extends DatabaseSeeder {

	public function run() 
	{

		DB::table('unidades')->insert(array(
			array(
				'nome' => 'Unidade Centro',
				'rua' => 'Avenida Nogueira Acioly',
				'bairro' => 'Centro',
				'numero' => 12,
				'complemento' => 'Casa',
				),
			array(
				'nome' => 'Unidade Zilar das pamonhas',
				'rua' => 'Rua das tamarinas',
				'bairro' => 'Centro',
				'numero' => 155,
				'complemento' => 'Chopana',
				),
			array(
				'nome' => 'Unidade Mauro Mendonça',
				'rua' => 'Alto dos 3 pinguelos',
				'bairro' => 'Joaninha sobral',
				'numero' => 157,
				'complemento' => 'Próximo a UPP',
				)
			));

	}
}