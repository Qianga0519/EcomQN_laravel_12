<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo 1 Super Admin cố định
        Admin::factory()->create([
            'ad_name' => 'Super Admin',
            'ad_email' => 'superadmin@example.com',
            'ad_password' => bcrypt('superadmin123'),
            'ad_active' => true,
        ]);
        // Tạo 10 admin giả lập
        Admin::factory(10)->create();

    }
}
