<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'pro_name' => $this->faker->word,
            'type_id' => rand(1, 4),
            'price' => $this->faker->randomFloat(1, 100),
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph,
            'ales' => rand(0, 100),
        ];
    }
}
