<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMeSeeder extends Seeder
{
    public function run()
    {
        DB::table('about_me')->insert([
            [
                'title' => 'Software Developer',
                'description' => 'Passionate developer with experience in Laravel and Vue.js.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hobbies',
                'description' => 'I enjoy hiking, reading, and exploring new technologies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Goals',
                'description' => 'Aiming to become a full-stack expert and contribute to impactful projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

