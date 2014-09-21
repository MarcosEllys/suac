<?php

use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('nome',70);
			$table->char('sexo',1);
			$table->date('nascimento');
			$table->integer('cpf')->unique();
			$table->integer('rg');
			$table->char('ufrg',2);
			$table->date('emitedrg');
			$table->string('email')->unique();
			$table->integer('telefone');
			$table->integer('cep');
			$table->char('uf',2);
			$table->string('cidade',35);
			$table->string('bairro',35);
			$table->string('rua',35);
			$table->integer('numero');
			$table->string('complemento',20);
			$table->string('pointreferencia');
			$table->string('username',70)->unique();
			$table->string('password');
			$table->string('password_confirmation');
			$table->boolean('is_admin');
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
		Schema::drop('users');
	}

}
