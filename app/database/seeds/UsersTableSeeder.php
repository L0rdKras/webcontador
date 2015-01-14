<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		/*foreach(range(1, 10) as $index)
		{
			User::create([

			]);
		}*/
		User::create([
			'id'		=>	1,
			'full_name'	=>	'Rodrigo Adones',
			'user_name'	=>	'rodrigo',
			'password'	=>	Hash::make('pruebaclave'),
			'email'		=>	'rodrigo.adonesv@gmail.com',
			'tipo'		=>	'admin'
		]);
	}

}