<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
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

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' =>fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 1, 100),
            'amount' => fake()->numberBetween(1, 100),
            'unit_measurement' => fake()->word(),
            'image' => fake()->imageUrl(),
            'ubication' => fake()->word(),
            'status' => fake()->boolean(),
            'category_id' => $this->getRandomCategoryId(),
        ];
    }

    private function getRandomCategoryId()
    {
        $maxId = Category::max('id');
        return rand(1, $maxId);
    }
}
