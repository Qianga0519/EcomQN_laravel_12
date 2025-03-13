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
            'tr_user_id' => User::factory(),
            'tr_total' => $this->faker->randomFloat(2, 100, 5000),
            'tr_note' => $this->faker->optional()->sentence(),
            'tr_address' => $this->faker->address(),
            'tr_phone_number' => $this->faker->phoneNumber(),
            'tr_status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
