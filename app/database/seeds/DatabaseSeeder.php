<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Eloquent::unguard();

		$this->call('UsersSeeder');
		$this->command->info('Users seededs!');
		$this->call('UnidadesSeeder');
		$this->command->info('Unidades seededs!');
	}

}

