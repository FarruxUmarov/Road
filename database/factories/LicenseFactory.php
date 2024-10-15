<?php

namespace Database\Factories;

use App\Http\Controllers\LicenseController;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends LicenseController
 */
class LicenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->year(),
            'passport' => $this->faker->password(),
            'phone_number' => $this->faker->phoneNumber,
            'telegram_user_id' => $this->faker->unique()->randomNumber(),
        ];
    }
}
