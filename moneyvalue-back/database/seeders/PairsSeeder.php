<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pairs')->insert([
            'from' =>'EUR',
            'to' => 'USD',
            'rate' => 0.8,
            'count' => 0
        ]);
        DB::table('pairs')->insert([
            'from' => 'EUR',
            'to' => 'BTC',
            'rate' => 0.08, // Remplacez cette valeur par le taux réel si nécessaire
            'count' => 0
        ]);

        DB::table('pairs')->insert([
            'from' => 'USD',
            'to' => 'EUR',
            'rate' => 1.2,
            'count' => 0
        ]);
        DB::table('pairs')->insert([
            'from' => 'USD',
            'to' => 'BTC',
            'rate' => 0.075, // Remplacez cette valeur par le taux réel si nécessaire
            'count' => 0
        ]);

        DB::table('pairs')->insert([
            'from' => 'BTC',
            'to' => 'EUR',
            'rate' => 80,
            'count' => 0
        ]);
        DB::table('pairs')->insert([
            'from' => 'BTC',
            'to' => 'USD',
            'rate' => 75, // Remplacez cette valeur par le taux réel si nécessaire
            'count' => 0
        ]);
    }
}
