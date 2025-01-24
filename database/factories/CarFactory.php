<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->word(),
            'model' => fake()->word(),
            'year' => fake()->year(),
            'horsepower' => fake()->numberBetween(100, 500),
            'color' => fake()->colorName(),
            'price' => fake()->numberBetween(10000, 10000000),
            'category_id' => fake()->numberBetween(1, 10)
        ];
    }
}
