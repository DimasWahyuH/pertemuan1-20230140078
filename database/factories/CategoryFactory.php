<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Elektronik', 'Fashion', 'Makanan & Minuman', 'Kesehatan', 'Otomotif', 
                'Perabotan', 'Olahraga', 'Pendidikan', 'Mainan', 'Komputer', 'Smartphone'
            ]),
        ];
    }
}