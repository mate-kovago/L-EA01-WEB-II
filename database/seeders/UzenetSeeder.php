<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UzenetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('uzenetek')->insert(['id' =>1, 'email' => 'afrika@freemail.hu', 'uzenet' =>"Javítsd a gyártási évet."]);
        DB::table('uzenetek')->insert(['id' =>2, 'email' => 'kanada@freemail.hu', 'uzenet' =>"Hozz létre egy új filmet "]);

    }
}
