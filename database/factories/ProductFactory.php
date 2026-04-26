<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'name' => $this->faker->words(2, true),
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}