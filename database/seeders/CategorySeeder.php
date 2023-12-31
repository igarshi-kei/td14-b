<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'しつもん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'つたえたいこと',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'そのほか',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'プレゼントについて',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'トナカイについて',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
