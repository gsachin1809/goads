<?php

use Illuminate\Database\Seeder;

class profileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profile')->insert([
            'first_name' => 'sachin ',
            'last_name' => 'gupta ',

            'email' => 'gsachin1809@gmail.com',
            
        ]); 
    }
}
