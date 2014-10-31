<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleReferenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('peoplesreferences',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome',80);
			$table->string('apelido',30)->nullable()->default(null);
			$table->date('nascimento');
			$table->string('nomemae',80)->nullable()->default(null);
			$table->string('nomepai',80)->nullable()->default(null);
			$table->string('nis',20);
			$table->string('cpf',11);
			$table->string('rg',15);
			$table->string('orgaorg',10);
			$table->string('ufrg',2);
			$table->date('emitedrg');
			$table->string('numeroprontuario',20);

			 // Dados sobre endereço.

			$table->string('cep',8);
			$table->char('uf',2);
			$table->string('municipio',50);
			$table->string('bairro',50);
			$table->string('rua',50);
			$table->string('numero',6);
			$table->string('complemento',30)->nullable()->default(null);
			$table->string('pointreference',25)->nullable()->default(null);
			$table->string('telefone1',10);
			$table->string('telefone2',10)->nullable()->default(null);

			 // Coluna de relacionamento

			$table->integer('unidade_id');

			$table->boolean('desligado');
			
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
