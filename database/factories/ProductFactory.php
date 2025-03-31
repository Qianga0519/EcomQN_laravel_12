<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Admin;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $productNames = [
            'iPhone 15 Pro Max',
            'Samsung Galaxy S24 Ultra',
            'MacBook Pro M3',
            'Dell XPS 15',
            'Asus ROG Strix G16',
            'Sony Bravia OLED TV',
            'iPad Air 2024',
            'HP Spectre x360',
            'Xiaomi Redmi Note 13'
        ];
        return [
            'name' => $this->faker->randomElement($productNames),
            'slug' => $this->faker->slug(),
            'category_id' => Category::factory(),
            'author_id' => Admin::factory(),
            'brands_id' => Brand::factory(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'price_old' => $this->faker->optional()->randomFloat(2, 1000, 1500),
            'sale' => $this->faker->numberBetween(0, 50),
            'active' => $this->faker->boolean(),
            'featured' => $this->faker->boolean(),
            'warranty' => $this->faker->optional()->word(),
            'number' => $this->faker->optional()->word(),
            'pay' => $this->faker->optional()->word(),
            'holiday' => $this->faker->optional()->word(),
            'view' => $this->faker->numberBetween(0, 5000),
            'stock' => $this->faker->numberBetween(0, 100),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->text(),
            'avatar' => $this->faker->imageUrl(300, 300),
            'description_seo' => $this->faker->sentence(),
            'key_seo' => $this->faker->sentence(),
            'title_seo' => $this->faker->sentence(),
        ];
    }
}