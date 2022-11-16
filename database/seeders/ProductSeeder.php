<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(100)->has(Variant::factory()->count(3))->create();
        $variant = Variant::factory()->count(2)->create();
 
        Product::factory()
            ->count(100)
            ->hasAttached($variant,['name' => fake()->randomElement(['S','M','L','XS', 'XXL',fake()->colorName()])])
            ->create();

        // Product::factory()->variants(2, ['name' => fake()->randomElement(['S','M','L','XS', 'XXL',fake()->colorName()])])->create();
    }
}
