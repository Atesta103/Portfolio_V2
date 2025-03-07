<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'Laravel'],
            ['name' => 'React'],
            ['name' => 'Node.js'],
            ['name' => 'MongoDB'],
            ['name' => 'Wordpress'],
        ]);
    }
}
