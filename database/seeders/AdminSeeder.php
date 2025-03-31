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
            'name' => 'Super Admin',
            'email' => 'spdmin@example.com',
            'password' => bcrypt('spdmin1234'),
            'active' => true,
            'phone_number' => '0123456789',
        ]);
        // Tạo 10 admin giả lập
        Admin::factory(10)->create();

    }
}