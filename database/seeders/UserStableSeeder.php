<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'adam tarek',
            'username' => 'adam250',
            'offece' => 'cairo-hany',
            'contry' => 'Egypt',
            'city' => 'Alex',
            'phone' => '01024533952',
            'password' => bcrypt('123123'),
            'usd' => 'true',
            'eruo' => 'true',
            'lira' => 'false',
            'updated-at'=>'2002',
            'created-at'=>'2002',
        ]);
    }
}