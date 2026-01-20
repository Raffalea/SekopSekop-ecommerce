<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with advanced features',
            'price' => 599.99,
            'stock' => 50,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Laptop',
            'description' => 'High-performance laptop for work and gaming',
            'price' => 1299.99,
            'stock' => 30,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'description' => 'Comfortable cotton t-shirt',
            'price' => 19.99,
            'stock' => 100,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Jeans',
            'description' => 'Classic blue jeans',
            'price' => 49.99,
            'stock' => 75,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Garden Hose',
            'description' => 'Durable garden hose for watering plants',
            'price' => 29.99,
            'stock' => 40,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Programming Book',
            'description' => 'Learn programming with this comprehensive guide',
            'price' => 39.99,
            'stock' => 60,
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Basketball',
            'description' => 'Official size basketball for outdoor play',
            'price' => 24.99,
            'stock' => 25,
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Headphones',
            'description' => 'Wireless headphones with noise cancellation',
            'price' => 149.99,
            'stock' => 35,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Dress',
            'description' => 'Elegant evening dress',
            'price' => 79.99,
            'stock' => 20,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Cookbook',
            'description' => 'Collection of delicious recipes',
            'price' => 19.99,
            'stock' => 45,
            'category_id' => 4,
        ]);
    }
}