<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class CarListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = $this->faker->words(3, true);
        $model = $this->faker->words(15, true);
        $engine = $this->faker->words(3, true);
        $price_per_day = $this->faker->randomFloat(2, 10, 1000);
        $image = $this->faker->words(3, true);
        $status = $this->faker->words(15, true);
    
        return [
            'brand' => $brand,
            'model' => $model,
            'engine' => $engine,
            'price_per_day' => $price_per_day,
            'image' => $image,
            'status' => $status,
        ];
    }
    
}
