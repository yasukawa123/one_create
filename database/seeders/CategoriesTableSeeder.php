<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //<=追加しないと使えない

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //シーだーで検証
        DB::table('categories')->insert([
            ['category_name' => '3dmodel'], 
            ['category_name' => 'illust'],  
            ['category_name' => 'graphic']
        ]);
    }
}
