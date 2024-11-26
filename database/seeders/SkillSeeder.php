<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::create(['icon' => 'first-service-icon service-icon','name' => 'Laravel', 'description' => 'A PHP framework for web artisans.']);
        Skill::create(['icon' => 'second-service-icon service-icon','name' => 'Vue.js', 'description' => 'A progressive JavaScript framework.']);
        Skill::create(['icon' => 'third-service-icon service-icon','name' => 'SQL', 'description' => 'A JavaScript library for building user interfaces.']);
        Skill::create(['icon' => 'fourth-service-icon service-icon','name' => 'Nuxt Js', 'description' => 'A Nuxt Js library for building user interfaces.']);
    }
}

