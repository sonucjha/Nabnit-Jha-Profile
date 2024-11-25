<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageUploadSeeder extends Seeder
{
    public function run()
    {
        // Add seed data
        DB::table('image_uploads')->insert([
            [
                'image' => 'uploads/example1.jpg',
                'type' => 'profile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'uploads/example2.png',
                'type' => 'banner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'uploads/example3.gif',
                'type' => 'gallery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
