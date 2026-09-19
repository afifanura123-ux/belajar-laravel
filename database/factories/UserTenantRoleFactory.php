<?php

namespace Database\Factories;

use App\Models\Tenant;
use App\Models\User;
use App\Models\UserTenantRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserTenantRole>
 */
class UserTenantRoleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'tenant_id' => Tenant::factory(),
            'role' => 'owner',
        ];
    }
}
