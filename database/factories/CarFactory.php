<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $makes = ['Ford', 'Jeep', 'Toyota', 'Nissan'];
        $models = ['Wrangler', 'Tacoma', 'Frontier', 'F-150'];

        return [
            'make' => $makes[rand(0,3)],
            'model' => $models[rand(0,3)],
            'year' => fake()->year(),
            'license_plate' => Str::random(10)
        ];
    }
}
