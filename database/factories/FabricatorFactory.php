<?php

namespace Database\Factories;

use App\Models\Fabricator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fabricator>
 */
class FabricatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Fabricator::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'alias' => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'description' => $this->faker->paragraph(),
        ];
    }
}
