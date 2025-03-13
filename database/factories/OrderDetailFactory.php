<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;

    public function definition(): array
    {
        return [
            'od_order_id' => Order::factory(),
            'od_product_id' => Product::factory(),
            'od_quantity' => $this->faker->numberBetween(1, 10),
            'od_price' => $this->faker->randomFloat(2, 100, 1000),
            'od_price_old' => $this->faker->optional()->randomFloat(2, 1000, 1500),
            'od_discount' => $this->faker->numberBetween(0, 50),
            'od_warranty' => $this->faker->optional()->word(),
        ];
    }
}