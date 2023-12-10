<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' =>'サンタクロース',
                'email' => 'santa@example.com',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
            [
                'name' =>'子供１',
                'email' => 'children@example.com',
                'password' => Hash::make('password2'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
            [
                'name' =>'子供2',
                'email' => 'child@example.com',
                'password' => Hash::make('password3'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
