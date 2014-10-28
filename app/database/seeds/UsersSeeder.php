<?php

Class UsersSeeder extends DatabaseSeeder{

	public function run()
	{
		DB::table('users')->insert(array(
				array(
						'id' => 1,
						'nome' => 'Administrador',
						'sexo' => 'M',
						'nascimento' => '1993/03/06',
						'cpf' => 1,
						'rg' => '',
						'ufrg' => '',
						'orgaorg' => '',
						'emitedrg' => '',
						'email' => 'marcos.ellys@gmail.com',
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
						'is_admin' => TRUE
					),
				array(
						'id' => 2,
						'nome' => 'Rangel Xavier',
						'sexo' => 'M',
						'nascimento' => '',
						'cpf' => 2,
						'rg' => '',
						'ufrg' => '',
						'orgaorg' => '',
						'emitedrg' => '',
						'email' => 'rangel@gmail.com',
						'telefone' => '',
						'cep' => '',
						'uf' => '',
						'cidade' => '',
						'bairro' => '',
						'rua' => '',
						'numero' => '',
						'complemento' => '',
						'pointreferencia' => '',
						'username' => 'rangeljavier',
						'password' => Hash::make('rangeljavier'),
						'is_admin' => TRUE
					),
				array(
						'id' => 3,
						'nome' => 'Pedro Saraiva',
						'sexo' => 'M',
						'nascimento' => '',
						'cpf' => 3,
						'rg' => '',
						'ufrg' => '',
						'orgaorg' => '',
						'emitedrg' => '',
						'email' => 'pedroca@gmail.com',
						'telefone' => '',
						'cep' => '',
						'uf' => '',
						'cidade' => '',
						'bairro' => '',
						'rua' => '',
						'numero' => '',
						'complemento' => '',
						'pointreferencia' => '',
						'username' => 'pedroca',
						'password' => Hash::make('psaraiva'),
						'is_admin' => TRUE
					)
			));
}

}