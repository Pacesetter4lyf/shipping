<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quote_rates')->insert([
            'air' => 1000,
            'land' => 1000,
            'ocean' => 1000,
            'km' => 1000,
            'kg' => 1000,
        ]);
    }
}
