<?php

use Illuminate\Database\Seeder;
//use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'User1',
        	'email' => 'user1@gmail.com',
        	'password' => bcrypt('password'),
        ]);
    }
}

