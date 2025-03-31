<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'category_id' => Category::factory(),
            'author_id' => Admin::factory(),
            'avatar' => $this->faker->imageUrl(300, 300),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->text(),
            'view' => $this->faker->numberBetween(0, 500),
            'active' => $this->faker->boolean(),
            'featured' => $this->faker->boolean(),
            'title_seo' => $this->faker->sentence(),
            'description_seo' => $this->faker->paragraph(),
            'key_seo' => $this->faker->sentence(),
        ];
    }
}