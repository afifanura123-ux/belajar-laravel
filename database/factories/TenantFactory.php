<?php

namespace Database\Factories;

use App\Models\Canteen;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'canteen_id' => Canteen::factory(),
            'code' => fake()->unique()->bothify('TENANT-###'),
            'slug' => fake()->unique()->slug(),
            'name' => fake()->company(),
            'status' => 'active',
        ];
    }
}
