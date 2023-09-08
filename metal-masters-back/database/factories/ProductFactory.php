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
    public function definition(): array
    {
        return [
            'name' => fake('es_ES')->name(),
            'price' => fake()->randomFloat(2, 1, 1999),
            'description' => fake()->text(),
            'specs' => fake()->text(100),
            // 'image_id',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
