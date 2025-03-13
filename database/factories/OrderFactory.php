<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'or_transaction_id' => Transaction::factory(),
            'or_user_id' => User::factory(),
            'or_total_price' => $this->faker->randomFloat(2, 100, 5000),
            'or_status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }
}
