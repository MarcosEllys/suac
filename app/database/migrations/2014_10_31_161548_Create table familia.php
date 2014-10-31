<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFamilia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('familys',function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('rendatotal');
			$table->integer('anosmoraestado');
			$table->integer('anosmoramunicipio');
			$table->integer('anosmorabairro');

			$table->integer('peoplesreference_id');

			$table->boolean('completo');
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
