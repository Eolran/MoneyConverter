<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            'name' => 'Euros',
            'currency' => 'EUR',
        ]);
        DB::table('currencies')->insert([
            'name' => 'Dollars',
            'currency' => 'USD',
        ]);
        DB::table('currencies')->insert([
            'name' => 'Bitcoin',
            'currency' => 'BTC',
        ]);
        DB::table('currencies')->insert([
            'name' => 'Ethereum',
            'currency' => 'ETH',
        ]);
        DB::table('currencies')->insert([
            'name' => 'Pesos',
            'currency' => 'PES',
        ]);
    }
}
