<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'body' => 'チームで協力して一つの成果物を作るイベントです！メンバー全員で助け合いましょう！',
                'user_id' => 1,
                'post_id' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
            ],
            [
                'body' => 'チームで協力して一つの成果物を作るイベントです！メンバー全員で助け合いましょう！',
                'user_id' => 1,
                'post_id' =>2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
            [
                'body' => 'チームで協力して一つの成果物を作るイベントです！メンバー全員で助け合いましょう！',
                'user_id' => 1,
                'post_id' =>3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
        

    }
}
