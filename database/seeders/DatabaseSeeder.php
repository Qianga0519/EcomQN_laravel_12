<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            BrandSeeder::class,
            ArticleSeeder::class,
            ImageSeeder::class,
            TransactionSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            ContactSeeder::class,

        ]);
    }
}
