<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            ProjectsSeeder::class,
            LanguagesSeeder::class,
            ExperiencesSeeder::class,
            EducationSeeder::class,
            MediaSeeder::class,
            ApprentissageCritiqueSeeder::class,
            CompetenceSeeder::class,
            ProjectLangCompApprenSeeder::class,
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
