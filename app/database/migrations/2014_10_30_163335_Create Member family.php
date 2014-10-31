<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberFamily extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('members', function(Blueprint $table)
		{

			$table->increments('id');

			$table->string('nome',80);
			$table->char('sexo',1);
			$table->date('nascimento');

			$table->string('cpf',11)->unique();
			$table->string('rg',15);
			$table->char('ufrg',2);
			$table->string('orgaorg',10);
			$table->date('emitedrg');

			$table->string('parentesco',25);
			$table->boolean('carteiratrabalho');
			$table->double('rendamensal');
			$table->string('qualificacao',25);

			$table->boolean('sabeler');
			$table->boolean('frequentaescola');
			$table->string('escolaridade',25);

			$table->text('observacao')->nullable()->default(null);

			$table->string('condicionalidadeseducacaobolsafamilia',30);

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
