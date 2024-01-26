<?php

namespace Database\Factories;

use App\Models\Fabricator;
use App\Models\ModelProduct;
use App\Models\Product;
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
            'name' => $this->faker->company(),
            'alias' => $this->faker->state(),
            'width' => $this->faker->numberBetween(100, 500),
            'height' => $this->faker->numberBetween(100, 500),
            'diameter' => $this->faker->numberBetween(100, 500),
        ];
    }
}
