<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        return [
            'im_product_id' => Product::factory(),
            'im_name' => $this->faker->imageUrl(640, 480, 'products'),
        ];
    }
}
