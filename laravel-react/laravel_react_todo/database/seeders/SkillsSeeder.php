<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    public function run()
    {
        // Create dev skills
        $devSkills = config('skills.dev');
        shuffle($devSkills);

        foreach ($devSkills as $skill) {
            Skills::create([
                'skill_name' => ucfirst($skill),
                'skill_type' => 'dev',
            ]);
        }

        // Create des skills
        $desSkills = config('skills.des');
        shuffle($desSkills);

        foreach ($desSkills as $skill) {
            Skills::create([
                'skill_name' => ucfirst($skill),
                'skill_type' => 'des',
            ]);
        }
    }
}
