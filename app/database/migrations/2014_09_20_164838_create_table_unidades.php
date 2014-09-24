<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUnidades extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	// Nome unidade: string(40)
	// Rua: string(35)
	// Bairro: string(35)
	// Numero: int(4)
	// Complemento: string(20)
	// Tipo unidade: (Option CRAS / CREAS) : string(5)

	public function up()
	{

		Schema::create('unidades',function(Blueprint $table){

			$table->increments('id');

			$table->string('nome',40);

			$table->string('rua',35);

			$table->string('bairro',30);

			$table->integer('numero');

			$table->string('complemento',20);

			$table->string('tipo',5);

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
