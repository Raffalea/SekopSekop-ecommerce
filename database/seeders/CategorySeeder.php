<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Material Dasar',
            'slug' => 'material-dasar',
            'description' => 'Semen, pasir, batu bata, dan bahan utama konstruksi',
        ]);

        Category::create([
            'name' => 'Besi & Baja',
            'slug' => 'besi-baja',
            'description' => 'Besi beton, hollow, dan material struktur',
        ]);

        Category::create([
            'name' => 'Finishing',
            'slug' => 'finishing',
            'description' => 'Cat, keramik, dan material finishing',
        ]);

        Category::create([
            'name' => 'Perlengkapan',
            'slug' => 'perlengkapan',
            'description' => 'Paku, triplek, dan alat bantu bangunan',
        ]);

        Category::create([
            'name' => 'Atap & Genteng',
            'slug' => 'atap-genteng',
            'description' => 'Genteng dan material atap rumah',
        ]);
    }
}