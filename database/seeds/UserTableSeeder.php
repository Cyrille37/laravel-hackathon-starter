<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		$u = new \App\User();
		$u->fullname = 'Aaron Swartz' ;
		$u->username = 'Jottit' ;
		$u->email = 'Aaron.Swartz@Internet.org';
		$u->password = 'secret' ;
		//$table->char('gender')->nullable();
		//$table->text('location')->nullable();
		//$table->text('website')->nullable();
		$u->save();

		$this->command->info('User created with username "'.$u->username.'" and password "'.$u->password.'"');

	}
}