<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

	public function run()
	{
	  // Using truncate function so all info will be cleared when re-seeding.
		DB::table('users')->truncate();

    $clear_password = 'secret' ;
		$u = new \App\User();
		$u->fullname = 'Super Man' ;
		$u->username = 'admin' ;
		$u->email = 'admin@internet.net';
		$u->password = bcrypt($clear_password) ;
		$u->save();

		$this->command->info('User created with username "'.$u->username.'" and password "'.$clear_password.'"');

	}
}

