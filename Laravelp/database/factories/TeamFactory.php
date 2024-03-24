<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'name' => fake()->company(),
            'titles' => fake()->randomDigit(),
            'logo' => fake()->word(),
            'conference_id' => fake()->numberBetween(1,2),
            'division_id' => fake()->numberBetween(1,8),
            'city_id' => fake()->numberBetween(1,20),
        ];
    }
}
