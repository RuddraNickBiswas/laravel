<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookTable>
 */
class BookTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'people' => $this->faker->numberBetween(1, 10),
            'message' => $this->faker->text,
            'status' => $this->faker->randomElement(['confirmed', 'pending', 'rejected']),
        ];
    }
}
