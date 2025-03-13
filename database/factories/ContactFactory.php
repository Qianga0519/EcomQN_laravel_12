<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'c_name' => $this->faker->name(),
            'c_email' => $this->faker->email(),
            'c_title' => $this->faker->sentence(),
            'c_content' => $this->faker->paragraph(),
            'c_status' => $this->faker->boolean(),
        ];
    }
}