<?php

namespace Database\Factories;

use App\Models\Canteen;
use App\Models\User;
use App\Models\UserCanteenRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserCanteenRole>
 */
class UserCanteenRoleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'canteen_id' => Canteen::factory(),
            'role' => 'admin',
        ];
    }
}
