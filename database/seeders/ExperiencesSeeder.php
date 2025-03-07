<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'company_name' => 'TechCorp',
                'job_title' => 'Développeur Backend',
                'start_date' => '2022-06-01',
                'end_date' => null,
                'description' => 'Développement d’API REST en Laravel.',
            ],
        ]);
    }
}
