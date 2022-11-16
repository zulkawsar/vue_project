<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(30)->create();
        Category::factory()->count(20)
        ->state(new Sequence(
            fn ($sequence) => ['parrent_id' => Category::whereNull('parrent_id')->get()->random()],
        ))->create();
    }
}
