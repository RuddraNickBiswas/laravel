<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSocialMedia>
 */
class UserSocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'social_media_name' => $this->faker->word,
            'social_media_link' => $this->faker->url,
            'visibility' => $this->faker->randomElement(['a', 'p']),
        ];
    }
}
