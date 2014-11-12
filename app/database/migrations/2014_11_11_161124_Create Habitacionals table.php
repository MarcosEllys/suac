<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('habitacionals', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('tiporesidencia')->nullable();
			$table->string('materialparedes')->nullable();
			$table->boolean('energia')->nullable();
			$table->boolean('agua')->nullable();
			$table->boolean('esgoto')->nullable();
			$table->boolean('coletalixo')->nullable();
			$table->boolean('localizadoareadesabamento')->nullable();
			$table->boolean('localizadoareadificilacesso')->nullable();
			$table->bigInteger('qtdcomodos')->nullable();
			$table->bigInteger('qtddormitorios')->nullable();
			$table->text('observacao')->default(null);
			
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
