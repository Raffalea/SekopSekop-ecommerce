<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Semen Tiga Roda 50kg',
            'description' => 'Semen berkualitas tinggi untuk konstruksi bangunan',
            'price' => 75000,
            'stock' => 100,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Batu Bata Merah',
            'description' => 'Batu bata merah solid untuk dinding rumah',
            'price' => 800,
            'stock' => 1000,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Pasir Bangunan 1 Truk',
            'description' => 'Pasir halus berkualitas untuk pengecoran',
            'price' => 1200000,
            'stock' => 20,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Besi Beton 10mm',
            'description' => 'Besi beton untuk struktur bangunan',
            'price' => 65000,
            'stock' => 200,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Besi Hollow 4x4',
            'description' => 'Besi hollow untuk rangka plafon dan pagar',
            'price' => 95000,
            'stock' => 150,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Cat Tembok 5kg',
            'description' => 'Cat tembok interior warna putih',
            'price' => 85000,
            'stock' => 80,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Keramik Lantai 40x40',
            'description' => 'Keramik lantai elegan dan tahan lama',
            'price' => 60000,
            'stock' => 120,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Paku 5cm',
            'description' => 'Paku baja untuk kebutuhan konstruksi',
            'price' => 15000,
            'stock' => 300,
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Triplek 9mm',
            'description' => 'Triplek berkualitas untuk furniture dan bangunan',
            'price' => 95000,
            'stock' => 70,
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Genteng Tanah Liat',
            'description' => 'Genteng kuat dan tahan cuaca',
            'price' => 2500,
            'stock' => 1000,
            'category_id' => 5,
        ]);
    }
}