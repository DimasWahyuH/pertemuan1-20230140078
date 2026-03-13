<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;  // <--- Nih, udah gua tambahin biar dia kenal
use App\Models\Category; // <--- Ini juga ditambahin!
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ayo Belajar',
            'email' => 'belajar@example.com',
            'password' => bcrypt('password') // Koma nyempilnya udah gua buang
        ]);

        Product::factory(20)->create();
        Category::factory(10)->create();
    }
}