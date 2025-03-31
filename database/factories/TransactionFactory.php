<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total' => $this->faker->randomFloat(2, 100, 5000),
            'note' => $this->faker->optional()->sentence(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
