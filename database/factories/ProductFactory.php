<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'   => fake()->words(fake()->numberBetween(1, 3), true),
            'amount' => fake()->numberBetween(40, 200), 
            'status' => fake()->numberBetween(0, 1)
        ];
    }
}
