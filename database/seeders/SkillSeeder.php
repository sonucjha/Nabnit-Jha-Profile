<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::create(['name' => 'Laravel', 'description' => 'A PHP framework for web artisans.']);
        Skill::create(['name' => 'Vue.js', 'description' => 'A progressive JavaScript framework.']);
        Skill::create(['name' => 'React', 'description' => 'A JavaScript library for building user interfaces.']);
    }
}

