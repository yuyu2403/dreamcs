<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitializebeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beer')->insert(
            [
                ['name' => 'キリン 一番搾り生ビール 350ml', 'detail' => 'おいしいよ', 'price' => '280', 'stock' => '10'],
            ]
        );
    }
}
