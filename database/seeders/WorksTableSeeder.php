<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('works')->insert([
            [
                'title' => 'Project Alpha',
                'description' => 'A brief description of Project Alpha.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project Beta',
                'description' => 'A brief description of Project Beta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project Gamma',
                'description' => 'A brief description of Project Gamma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
