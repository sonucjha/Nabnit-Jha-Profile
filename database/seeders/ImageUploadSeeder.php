<?php

namespace Database\Seeders;

use App\Models\ImageUpload;
use Illuminate\Database\Seeder;

class ImageUploadSeeder extends Seeder
{
    public function run()
    {
        // Add seed data
        $images = [
            [
                'image' => 'uploads/example1.jpg',
                'type' => 'profile',
            ],
            [
                'image' => 'uploads/example2.png',
                'type' => 'banner',
            ],
            [
                'image' => 'uploads/example3.gif',
                'type' => 'gallery',
            ],
        ];

        foreach ($images as $image) {
            ImageUpload::create($image);
        }
    }
}
