<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgendarAtendimento extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('agendaratendimentos', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('peoplesreference_id');
			$table->date('atendimento');
			$table->string('tipoatendimento',80);

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
