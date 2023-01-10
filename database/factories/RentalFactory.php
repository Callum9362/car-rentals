<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'start' => fake()->dateTimeThisMonth(),
            'end' => fake()->dateTimeThisMonth(),
            'rate' => fake()->numberBetween(100, 500),
            'customer_id' => fake()->numberBetween(1, 10),
            'car_id' => fake()->numberBetween(1, 10),
            'location_id' => fake()->numberBetween(1, 10)
        ];
    }
}
