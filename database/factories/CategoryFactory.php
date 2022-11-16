<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    public function configure()
    {
        return $this->afterMaking(function (Category $category) {
            // dd($category);
        });
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'   => fake()->sentence(fake()->numberBetween(1, 3)),
            'status' => fake()->numberBetween(0, 1)
        ];
    }

    // public function subcategory()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'account_status' => 'suspended',
    //         ];
    //     });
    // }
}
