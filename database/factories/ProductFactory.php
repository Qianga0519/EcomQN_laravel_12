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
            'p_name' => $this->faker->randomElement($productNames),
            'p_slug' => $this->faker->slug(),
            'p_category_id' => Category::factory(),
            'p_author_id' => Admin::factory(),
            'p_brands_id' => Brand::factory(),
            'p_price' => $this->faker->randomFloat(2, 100, 1000),
            'p_price_old' => $this->faker->optional()->randomFloat(2, 1000, 1500),
            'p_sale' => $this->faker->numberBetween(0, 50),
            'p_active' => $this->faker->boolean(),
            'p_featured' => $this->faker->boolean(),
            'p_warranty' => $this->faker->optional()->word(),
            'p_number' => $this->faker->optional()->word(),
            'p_pay' => $this->faker->optional()->word(),
            'p_holiday' => $this->faker->optional()->word(),
            'p_view' => $this->faker->numberBetween(0, 5000),
            'p_stock' => $this->faker->numberBetween(0, 100),
            'p_description' => $this->faker->paragraph(),
            'p_content' => $this->faker->text(),
            'p_avatar' => $this->faker->imageUrl(300, 300),
            'p_description_seo' => $this->faker->sentence(),
            'p_key_seo' => $this->faker->sentence(),
            'p_title_seo' => $this->faker->sentence(),
        ];
    }
}
