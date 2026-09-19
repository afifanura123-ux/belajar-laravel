<?php

namespace Database\Seeders;

use App\Models\Canteen;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Tenant;
use App\Models\User;
use App\Models\UserCanteenRole;
use App\Models\UserTenantRole;
use Illuminate\Database\Seeder;

class DemoCanteenSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 1 canteen
        $canteen = Canteen::create([
            'code' => 'KANTIN-POLIWANGI',
            'slug' => 'kantin-poliwangi',
            'tax_rate' => 11.00,
            'service_fee_rate' => 5.00,
            'status' => 'active',
        ]);

        // 2. Buat 2 tenant
        $tenant1 = Tenant::create([
            'canteen_id' => $canteen->id,
            'code' => 'TENANT-01',
            'slug' => 'tenant-01',
            'name' => 'Kantin Makanan',
            'status' => 'active',
        ]);

        $tenant2 = Tenant::create([
            'canteen_id' => $canteen->id,
            'code' => 'TENANT-02',
            'slug' => 'tenant-02',
            'name' => 'Kantin Minuman',
            'status' => 'active',
        ]);

        // 3. Buat user admin
        $user = User::factory()->create([
            'name' => 'Admin Kantin',
            'email' => 'admin@kantin.test',
        ]);

        // 4. Hubungkan user dengan canteen
        UserCanteenRole::create([
            'user_id' => $user->id,
            'canteen_id' => $canteen->id,
            'role' => 'admin',
        ]);

        // 5. Hubungkan user dengan masing-masing tenant
        UserTenantRole::create([
            'user_id' => $user->id,
            'tenant_id' => $tenant1->id,
            'role' => 'owner',
        ]);

        UserTenantRole::create([
            'user_id' => $user->id,
            'tenant_id' => $tenant2->id,
            'role' => 'owner',
        ]);

        // 6. Kategori dan menu Tenant 1
        $category1 = MenuCategory::create([
            'tenant_id' => $tenant1->id,
            'name' => 'Makanan',
            'slug' => 'makanan',
        ]);

        Menu::create([
            'tenant_id' => $tenant1->id,
            'category_id' => $category1->id,
            'name' => 'Nasi Goreng',
            'slug' => 'nasi-goreng',
            'description' => 'Nasi goreng sederhana',
            'price' => 15000,
            'status' => 'active',
        ]);

        // 7. Kategori dan menu Tenant 2
        $category2 = MenuCategory::create([
            'tenant_id' => $tenant2->id,
            'name' => 'Minuman',
            'slug' => 'minuman',
        ]);

        Menu::create([
            'tenant_id' => $tenant2->id,
            'category_id' => $category2->id,
            'name' => 'Es Teh',
            'slug' => 'es-teh',
            'description' => 'Es teh manis',
            'price' => 5000,
            'status' => 'active',
        ]);
    }
}
