<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tweet;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            Tweet::create([
                'user_id'    => $i,
                'tweets_image' => 'https://placehold.jp/50x50.png',
                'title'       => 'テストタイトル' .$i,
                'text'       => 'これはテスト投稿' .$i,
                'price' => intval($i .'000'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        
    }
}
