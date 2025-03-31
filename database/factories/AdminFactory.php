<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('admin123'), // Mật khẩu mặc định
            'phone_number' => $this->faker->unique()->numerify('09########'),
            'avatar' => 'https://i.pravatar.cc/150?u=' . $this->faker->unique()->randomNumber(),
            'active' => true,
            'remember_token' => Str::random(10),
        ];
    }
}