<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updatenumprotuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('peoplesreferences', function($table)
		{
			$table->dropColumn('numprontuario');
		});

		Schema::table('peoplesreferences', function($table)
		{
			$table->date('numprontuario')
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
