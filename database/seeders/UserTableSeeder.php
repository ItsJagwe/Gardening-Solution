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
                'username'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('111'),
                'role'=>  'admin',
                'status'=> 'active',
            ],
            //vendor
            [
                'full_name'=> 'Yash Vendor',
                'username'=> 'Vendor',
                'email'=> 'vendor@gmail.com',
                'password'=> Hash::make('1111'),
                'role'=>  'vendor',
                'status'=> 'active',

            ],
            //customer
            [
                'full_name'=> 'Yash Customer',
                'username'=> 'Customer',
                'email'=> 'customer@gmail.com',
                'password'=> Hash::make('111'),
                'role'=>  'customer',
                'status'=> 'active',

            ]
            ]);
    }
}
