<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Fine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fine>
 */
class FineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plate_number' => $this->faker->randomNumber(),
            'amount' => $this->faker->numberBetween(100, 1000),
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['red_light', 'speed']),
            'car_id' => Car::inRandomOrder()->first()->id,
        ];

    }
}
