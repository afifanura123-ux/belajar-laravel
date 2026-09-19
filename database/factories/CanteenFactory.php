<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CanteenFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->bothify('KANTIN-###'),
            'slug' => fake()->unique()->slug(),
            'tax_rate' => 11.00,
            'service_fee_rate' => 5.00,
            'status' => 'active',
        ];
    }
}
