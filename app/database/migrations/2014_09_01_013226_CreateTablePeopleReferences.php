<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeopleReferences extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('peoplerefences',function(Blueprint $table){	

			$table->increments('id');

			$table
			->string('name',60);

			$table
			->string('apelido',30)
			->nullable()
			->default(null);

			$table
			->string('namemather',60)
			->nullable()
			->default(null);

			$table
			->string('namefather',60)
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
			->integer('numprotuario')
			->default(null);

			$table
			->string('typeunity',5);

			$table
			->string('nameunity',20);

			 /**
			 * Dados sobre endereço.
			 *
			 */

			 $table
			 ->string('rua',40);

			 $table
			 ->string('bairro',35)
			 ->default('centro');

			 $table
			 ->integer('cep')
			 ->default(63430000);

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
			 ->integer('telephone1');


			 $table
			 ->integer('telephone2')
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
		Schema::dropIfExists('peoplerefences');
	}

}
