<?php

class UserSeeder
{
	public function run()
	{
		$users = [
			[
			"username" => "christopher.pitt",
			"password" => Hash::make("r0t3m4c"),
			"email" => "marcos.ellys@gmail.com"
			]
		];

		foreach($users as $user)
		{
			User::create($user);
		}
	}
}
