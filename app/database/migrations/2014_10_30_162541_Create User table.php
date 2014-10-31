<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome',70);
			$table->char('sexo',1);
			$table->date('nascimento');
			$table->string('cpf',11)->unique();
			$table->string('rg',15);
			$table->char('ufrg',2);
			$table->string('orgaorg',10);
			$table->date('emitedrg');
			$table->string('email',50)->unique();
			$table->string('telefone',10);
			$table->string('cep',8);
			$table->char('uf',2);
			$table->string('cidade',50);
			$table->string('bairro',50);
			$table->string('rua',50);
			$table->string('numero',6);
			$table->string('complemento',30)->nullable()->default(null);
			$table->string('pointreferencia',30)->nullable()->default(null);
			$table->string('username',20)->unique();
			$table->string('password');
			$table->boolean('is_admin');
			$table->string('remember_token',100);
			$table->timestamps();
		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
