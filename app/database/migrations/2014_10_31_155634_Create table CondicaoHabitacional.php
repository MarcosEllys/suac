<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCondicaoHabitacional extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('condicaohabitacional',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tiporesidencia',25);
			$table->string('materialparedes',25);
			$table->integer('qtdcomods');
			$table->integer('qtdquartos');

			$table->boolean('energia');
			$table->boolean('agua');
			$table->boolean('sanitario');
			$table->boolean('coletalixo');
			$table->boolean('localizadoareadesabamento');
			$table->boolean('localizadoareadificilacesso');

			$table->text('observacao');

			$table->integer('family_id');

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
