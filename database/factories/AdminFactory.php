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
            'ad_name' => $this->faker->name(),
            'ad_email' => $this->faker->unique()->safeEmail(),
            'ad_password' => Hash::make('admin123'), // Mật khẩu mặc định
            'ad_phone_number' => $this->faker->unique()->numerify('09########'),
            'ad_avatar' => 'https://i.pravatar.cc/150?u=' . $this->faker->unique()->randomNumber(),
            'ad_active' => true,
            'remember_token' => Str::random(10),
        ];
    }
}
