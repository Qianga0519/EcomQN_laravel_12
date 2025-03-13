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
            'b_name'     => $this->faker->company(), // Tên thương hiệu (giả lập tên công ty)
            'b_email'    => $this->faker->unique()->companyEmail(), // Email thương hiệu
            'b_phone'    => $this->faker->optional()->phoneNumber(), // Số điện thoại (có thể null)
            'b_fax'      => $this->faker->optional()->phoneNumber(), // Số fax (có thể null)
            'b_website'  => $this->faker->optional()->url(), // Website (có thể null)
            'b_logo'     => $this->faker->optional()->imageUrl(300, 300, 'brands'), // Logo (có thể null)
            'b_status'   => $this->faker->boolean(80), // Trạng thái (80% hoạt động)
        ];
    }
}