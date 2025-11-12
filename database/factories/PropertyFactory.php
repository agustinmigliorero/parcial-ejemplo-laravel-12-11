<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(255),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 100000),
            'address' => fake()->text(255),
            'property_type' => fake()->randomElement(['Casa', 'Departamento', 'Lote']),
            'bedrooms' => fake()->numberBetween(0, 10),
            'bathrooms' => fake()->numberBetween(0, 10),
            'area' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
