<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ThingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'a_date'=>fake()->date(),
            'a_number'=>fake()->numberBetween(0, 100000),
            'price'=>fake()->randomFloat(2, 0, 5000),
        ];
    }
}
