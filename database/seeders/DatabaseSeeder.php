<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fabricator;
use App\Models\ModelProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        for ($i = 0; $i < 50; $i++){
            $fabricator = Fabricator::factory()->create();
            for ($j = 0; $j < 20; $j++){
                $modelFabric = ModelProduct::factory()
                    ->create(['fabricator_id' => $fabricator->id]);
                for ($z = 0; $z < 20; $z++){
                    Product::factory()
                        ->create(['model_id' => $modelFabric->id]);
                }
            }
        }
    }
}
