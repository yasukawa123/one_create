<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //<=追加しないと使えない
use App\Models\User;

class UsersTableSeeder extends Seeder
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
            User::create([
                'name'    => 'test' .$i,
                'screen_name'    => 'test_user' .$i,
                'profile_image'  => 'https://placehold.jp/50x50.png',
                'email'          => 'test' .$i .'@test.com',
                'password'       => bcrypt('password'),
                'remember_token' => 'asdfghjkl' .$i,
                'role' => intval($i .'0'),
                'created_at'     => now(),
                'updated_at'     => now()
            ]);
        }
    }
}
