<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'method' => 'Visa',
            'amount' => fake()->numberBetween(100, 1000),
            'paid_date' => fake()->dateTimeThisMonth(),
            'rental_id' => fake()->numberBetween(1, 3)
        ];
    }
}
