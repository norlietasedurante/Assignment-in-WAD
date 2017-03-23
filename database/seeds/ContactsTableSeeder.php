<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users_count = DB::table('users')->count()
        DB::table('contacts')->insert([
        	'full_name'=> str_random(20),
        	'phone_number'
        	'email'=> str_random(10) . '@gamil.com',
        	'password'=> bcrypt('secret')])
    }
}
