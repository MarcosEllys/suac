<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteNomeunidadeInPeoplereference extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('peoplesreferences', function($table)
		{
			$table->dropColumn('nomeunidade');
			$table->dropColumn('tipounidade');
		});
		
	}

}
