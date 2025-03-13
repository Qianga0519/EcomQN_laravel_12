<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'c_name' => $this->faker->word(),
            'c_slug' => $this->faker->slug(),
            'c_icon' => $this->faker->optional()->word(),
            'c_avatar' => $this->faker->optional()->imageUrl(300, 300),
            'c_active' => $this->faker->boolean(),
            'c_total_product' => $this->faker->numberBetween(0, 100),
            'c_home' => $this->faker->boolean(),
            'c_author_id' => Admin::factory(),
        ];
    }
}
