<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //<=追加しないと使えない

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'hoge',
                'content' => 'test',
                'price' => 2000,
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'hoge',
                'content' => 'test2',
                'price' => 3000,
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'hoge',
                'content' => 'test3',
                'price' => 4000,
            ],
        ]);
    }
}