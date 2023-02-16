<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
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
            'category_id' => fake()->numberBetween(1, 50),
            'sub_category_id' => fake()->numberBetween(1, 50),
            'title' => fake()->sentence(2),
            'slug' => fake()->slug(),
            'shop_id' => 1,
            'price' => fake()->numberBetween(10, 100),
            'quantity' => fake()->numberBetween(10, 50)
        ];
    }
}
