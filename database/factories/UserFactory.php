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
            'phone_number' => $this->faker->unique()->numerify('098#######'), // Tạo số điện thoại ngẫu nhiên
            'avatar' => 'https://i.pravatar.cc/150?u=' . $this->faker->unique()->randomNumber(), // Avatar giả
            'active' => true,
            'password' => Hash::make('password'), // Mật khẩu mặc định là 'password'
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'total_pay' => $this->faker->randomFloat(2, 1000, 50000),
            'address' => $this->faker->address(),
            'about' => $this->faker->text(200),
            'role' => $this->faker->randomElement(['user', 'seller', 'vip']),
            'last_login_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
