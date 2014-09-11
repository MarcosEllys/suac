<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NumprotuarioAI extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('peoplesreferences', function($table)
		{
			$table->dropColumn('numprotuario');

			$table->string('numprontuario')
			->after('emitedrg')
			->increments();
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
