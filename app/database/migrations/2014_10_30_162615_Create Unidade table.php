<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('unidades',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome',50)->unique();
			$table->string('rua',50);
			$table->string('bairro',50);
			$table->string('numero',6);
			$table->string('complemento',30);
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
