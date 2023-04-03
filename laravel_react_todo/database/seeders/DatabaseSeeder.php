<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\UserSkills;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $this->call([SkillsSeeder::class]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()
            ->count(4)
            ->hasAddress(1)
            ->hasSocialMedia(3)
            ->hasUserSkills(random_int(1,6))
            ->create();
    }
}
