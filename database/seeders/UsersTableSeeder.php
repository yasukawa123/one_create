<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //<=追加しないと使えない

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //シーだーで検証
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'host@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
