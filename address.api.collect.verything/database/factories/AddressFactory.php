<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'addressLine1' => fake()->address(),
            'zipCode' => fake()->postcode(), // password
            'city' => fake()->city(),
            'country'=> fake()->countryCode(),
            'latitude'=> fake()->latitude(),
            'longitude'=> fake()->longitude(),
        ];
    }
}
