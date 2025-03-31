<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition(): array
    {
        return [
            'admin_id'   => Admin::factory(), // Tạo admin giả lập và liên kết
            'name'     => $this->faker->company(), // Tên thương hiệu (giả lập tên công ty)
            'website'  => $this->faker->optional()->url(), // Website (có thể null)
            'logo'     => $this->faker->optional()->imageUrl(300, 300, 'brands'), // Logo (có thể null)
            'status'   => $this->faker->boolean(80), // Trạng thái (80% hoạt động)
        ];
    }
}