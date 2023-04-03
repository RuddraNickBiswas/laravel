<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skills>
 */
class SkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = ['dev', 'des'];
        $type = $this->faker->randomElement($types);
        $skills = config('skills.' . $type);
        $skillName = ucfirst(array_pop($skills));

        return [
            'skill_name' => $skillName,
            'skill_type' => $type,
        ];
    }
}
