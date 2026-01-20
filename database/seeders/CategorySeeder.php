<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Electronic devices and gadgets',
        ]);

        Category::create([
            'name' => 'Clothing',
            'slug' => 'clothing',
            'description' => 'Fashion and apparel',
        ]);

        Category::create([
            'name' => 'Home & Garden',
            'slug' => 'home-garden',
            'description' => 'Home improvement and gardening supplies',
        ]);

        Category::create([
            'name' => 'Books',
            'slug' => 'books',
            'description' => 'Books and literature',
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports',
            'description' => 'Sports equipment and accessories',
        ]);
    }
}