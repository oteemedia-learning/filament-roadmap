<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['planned', 'in progress', 'completed']),
            'description' => $this->faker->paragraph,
            'cost' => $this->faker->randomNumber(2),
            'date' => $this->faker->date,
            'datetime' => $this->faker->dateTime,
        ];
    }
}
