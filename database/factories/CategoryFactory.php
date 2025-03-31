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
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'icon' => $this->faker->optional()->word(),
            'avatar' => $this->faker->optional()->imageUrl(300, 300),
            'active' => $this->faker->boolean(),
            'total_product' => $this->faker->numberBetween(0, 100),
            'home' => $this->faker->boolean(),
            'author_id' => Admin::factory(),
        ];
    }
}