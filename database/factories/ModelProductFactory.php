<?php

namespace Database\Factories;

use App\Models\Fabricator;
use App\Models\ModelProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelProduct>
 */
class ModelProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ModelProduct::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'alias' => $this->faker->state(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
