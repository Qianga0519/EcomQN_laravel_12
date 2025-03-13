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
            'a_title' => $this->faker->sentence(),
            'a_slug' => $this->faker->slug(),
            'a_category_id' => Category::factory(),
            'a_author_id' => Admin::factory(),
            'a_avatar' => $this->faker->imageUrl(300, 300),
            'a_description' => $this->faker->paragraph(),
            'a_content' => $this->faker->text(),
            'a_view' => $this->faker->numberBetween(0, 500),
            'a_active' => $this->faker->boolean(),
            'a_featured' => $this->faker->boolean(),
            'a_title_seo' => $this->faker->sentence(),
            'a_description_seo' => $this->faker->paragraph(),
            'a_key_seo' => $this->faker->sentence(),
        ];
    }
}