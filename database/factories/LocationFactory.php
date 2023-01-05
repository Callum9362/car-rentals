<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hours = ["Monday 9:00am-5:00pm", "Tuesday 9:00am-5:00pm",
            "Wednesday 9:00am-5:00pm", "Thursday 9:00am-5:00pm", "Friday 9:00am-5:00pm"];

        return [
            'name' => fake()->city(),
            'code' => strtoupper(Str::random(5)),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'operation_hours' => $hours[rand(0,3)],
        ];
    }
}
