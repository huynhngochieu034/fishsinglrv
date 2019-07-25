<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(UsersTableSeeder::class);
         $this->call(UserSeeder::class);


    }
}

class userSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([
          ['name' => 'Hieu','email' => 'Hieu034.@gmail.com','password' => bcrypt('12w3456')],
          ['name' => 'abc','email' => 'ds.@gmail.com','password' => bcrypt('12r3456')]
		]);
	}
}
