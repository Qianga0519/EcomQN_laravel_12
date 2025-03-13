<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'u_phone_number' => $this->faker->unique()->numerify('098#######'), // Tạo số điện thoại ngẫu nhiên
            'u_avatar' => 'https://i.pravatar.cc/150?u=' . $this->faker->unique()->randomNumber(), // Avatar giả
            'u_active' => true,
            'u_password' => Hash::make('password'), // Mật khẩu mặc định là 'password'
            'u_name' => $this->faker->name(),
            'u_email' => $this->faker->unique()->safeEmail(),
            'u_email_verified_at' => now(),
            'u_total_pay' => $this->faker->randomFloat(2, 1000, 50000),
            'u_address' => $this->faker->address(),
            'u_about' => $this->faker->text(200),
            'u_role' => $this->faker->randomElement(['user', 'seller', 'vip']),
            'u_last_login_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
