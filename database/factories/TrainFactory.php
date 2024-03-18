<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'departure_station' => fake()->address(),
            'arrival_station' => fake()->address(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'code' => fake()->ean8(),
            'carriage_number' => fake()->randomDigitNotNull(),
            'on_time' => rand(0, 1),
            'deleted' => fake()->boolean()
        ];
    }
}
