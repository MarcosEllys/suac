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
			$table->double('rendatotal')->nullable()->default(null);
			$table->integer('anosmoraestado')->nullable()->default(null);
			$table->integer('anosmoramunicipio')->nullable()->default(null);
			$table->integer('anosmorabairro')->nullable()->default(null);

			$table->integer('peoplesreference_id')->nullable()->default(null);

			$table->boolean('completo')->nullable()->default(null);

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
