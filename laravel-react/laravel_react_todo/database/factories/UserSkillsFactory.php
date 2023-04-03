<?php

namespace Database\Factories;

use App\Models\Skills;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSkills>
 */
class UserSkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{

    $skillId = Skills::pluck('id')->random();


    return [
        'user_id' => User::factory(),
        'skill_id' => $skillId,
        'progress' => $this->faker->numberBetween(0, 100),
    ];
}

}
