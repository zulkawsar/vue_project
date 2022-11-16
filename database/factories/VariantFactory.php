<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variant>
 */
class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = ['Color', 'Size'];
        return [
            'name'   => $name[fake()->numberBetween(0,1)],
            'status' => fake()->numberBetween(0, 1)
        ];
    }
}
