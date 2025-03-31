<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('user1234'),
            'active' => true,
            'phone_number' => '0123456781',
        ]);
        // Tạo 50 người dùng giả lập
        User::factory(10)->create();
    }
}