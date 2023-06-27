<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InitializeuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert(
            [
                ['name' => 'バービー', 'mail' => 'aaaa@aa.com', 'password' => 'aaaaa', 'address' => 'JAPAN'],
            ]
        );
    }
}
