<?php

Class PrimaryUserSeeder extends DatabaseSeeder{

	public function run()
	{

		DB::table('users')->insert(array(
			'id' => 1,
			'nome' => 'Administrador',
			'sexo' => 'M',
			'nascimento' => '1993/03/06',
			'cpf' => '',
			'rg' => '',
			'ufrg' => '',
			'orgaorg' => '',
			'emitedrg' => '',
			'email' => '',
			'telefone' => '',
			'cep' => '',
			'uf' => '',
			'cidade' => '',
			'bairro' => '',
			'rua' => '',
			'numero' => '',
			'complemento' => '',
			'pointreferencia' => '',
			'username' => 'admin',
			'password' => Hash::make('suacsuac1'),
			'is_admin' => 0,

			));
	}

}