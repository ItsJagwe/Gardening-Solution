<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            //admin
            [
                'full_name'=> 'Yash Admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('111'),
                'role'=>  'admin',
                'status'=> 'active',
            ],
            //customer
            [
                'full_name'=> 'Yash Customer',
                'email'=> 'customer@gmail.com',
                'password'=> Hash::make('111'),
                'role'=>  'customer',
                'status'=> 'active',

            ]
            ]);
    }
}
