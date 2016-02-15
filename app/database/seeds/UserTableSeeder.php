<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Akhil Agrawal',
			'username' => 'akhil',
			'email'    => 'akhilatmail@gmail.com',
			'password' => Hash::make('secret'),
		));
	}

}