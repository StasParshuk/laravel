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
            "category_id" => fake()->biasedNumberBetween(1, 10),
            'title' => fake()->unique()->colorName,
            'description' => fake()->text,
            'short_description' => fake()->text(150),
            'SKU' => fake()->text(35),
            "price" => fake()->biasedNumberBetween,
            "discount" => fake()->biasedNumberBetween(1, 60),
            'in_stock' => fake()->biasedNumberBetween(1, 60),
            'thumbnail' => fake()->filePath()

        ];
    }
}
