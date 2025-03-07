<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'institution' => 'Université de Toulon',
                'degree' => 'BUT MMI Développement',
                'start_date' => '2021-09-01',
                'end_date' => '2024-06-30',
                'description' => 'Formation en développement web et mobile.',
            ],
        ]);
    }
}
