<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'sachin ',
            'email' => 'gsachin1809@gmail.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
