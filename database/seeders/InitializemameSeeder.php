<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InitializemameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mame')->insert(
            [
                ['mame' => 'バービーピンクの塗料が世の中で不足してるんだって'],
            ]
        );
    }
}
