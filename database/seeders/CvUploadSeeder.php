<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CvUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_uploads')->insert([
            [
                'name' => 'Nabnit CV',
                'cv_file' => 'uploads/cv/john_doe_cv.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sonu CV',
                'cv_file' => 'uploads/cv/jane_smith_cv.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monu CV',
                'cv_file' => 'uploads/cv/robert_brown_cv.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
