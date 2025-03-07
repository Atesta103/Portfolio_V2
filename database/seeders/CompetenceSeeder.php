<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competences')->insert([
            ['name' => 'Comprendre'],
            ['name' => 'Concevoir'],
            ['name' => 'Exprimer'],
            ['name' => 'Développer'],
            ['name' => 'Entreprendre'],
        ]);
    }
}
