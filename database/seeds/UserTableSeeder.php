<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user')->insert([
        	'name'=> str_random(10),
        	'email'=> str_random(10) . '@gamil.com',
        	'password'=> bcrypt('secret')])
    }
}
