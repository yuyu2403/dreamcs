<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class InitializecategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['name' => 'サントリー'],
                ['name' => 'キリン'],
                ['name' => 'アサヒ'],
                ['name' => 'ヱビス'],
                ['name' => 'サッポロ'],
                ['name' => 'クラフトビール']
            ]
        );
    }
}
