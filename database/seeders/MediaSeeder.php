<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            [
                'project_id' => 1,
                'file_path' => 'images/Acta&verba_logo.png',
                'mockup' => 'images/Acta&verba_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 1,
                'file_path' => 'https://www.youtube.com/embed/0tNsjB2GDWc',
                'mockup' => null,
                'file_type' => 'video',
            ],
            [
                'project_id' => 2,
                'file_path' => 'images/PortfolioS2_logo.png',
                'mockup' => 'images/PortfolioS2_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 3,
                'file_path' => 'images/LAN_logo.png',
                'mockup' => 'images/LAN_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 4,
                'file_path' => 'images/Teloculture_logo.png',
                'mockup' => 'images/Teloculture_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 5,
                'file_path' => 'images/Acta&verba_logo.png',
                'mockup' => 'images/Acta&verba_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 6,
                'file_path' => 'images/PortfolioS2_logo.png',
                'mockup' => 'images/PortfolioS2_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 7,
                'file_path' => 'images/LAN_logo.png',
                'mockup' => 'images/LAN_mockup.png',
                'file_type' => 'image',
            ],
            [
                'project_id' => 8,
                'file_path' => 'images/Teloculture_logo.png',
                'mockup' => 'images/Teloculture_mockup.png',
                'file_type' => 'image',
            ],
        ]);
    }
}
