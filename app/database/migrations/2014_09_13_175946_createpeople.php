<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createpeople extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peoplesreferences',function(Blueprint $table){	

			$table->increments('id');

			$table
			->string('nome',60);

			$table
			->string('apelido',30)
			->nullable()
			->default(null);

			$table->date('nascimento');

			$table
			->string('nomemae',60)
			->nullable()
			->default(null);

			$table
			->string('nomepai',60)
			->nullable()
			->default(null);

			$table
			->string('nis',20);

			$table
			->integer('cpf');

			$table
			->integer('rg');

			$table
			->string('orgaorg',10);

			$table
			->string('ufrg',2);

			$table
			->date('emitedrg');

			$table
			->integer('numeroprontuario');

			$table
			->string('tipounidade',5);

			$table
			->string('nomeunidade',20);

			 /**
			 * Dados sobre endereço.
			 *
			 */

			 $table
			 ->string('rua',40);

			 $table
			 ->string('bairro',35);

			 $table
			 ->integer('cep');

			 $table
			 ->string('municipio',30)
			 ->default('Icó');

			 $table
			 ->string('complemento',20)
			 ->nullable()
			 ->default(null);

			 $table
			 ->string('pointreference',20)
			 ->nullable()
			 ->default(null);

			 $table
			 ->integer('telefone1');


			 $table
			 ->integer('telefone2')
			 ->nullable()
			 ->default(null);

			 $table
			 ->string('localization',6)
			 ->default('urbano');

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
		Schema::dropIfExists('peoplesreferences');
	}

}
