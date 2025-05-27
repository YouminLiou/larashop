<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'name'        => '商品 A',
            'description' => '這是商品 A 的描述。',
            'price'       => 100.00,
            'image_url'   => 'https://via.placeholder.com/300x200',
        ]);
        Product::create([
            'name'        => '商品 B',
            'description' => '這是商品 B 的描述。',
            'price'       => 200.00,
            'image_url'   => 'https://via.placeholder.com/300x200',
        ]);
        Product::create([
            'name'        => '商品 C',
            'description' => '這是商品 C 的描述。',
            'price'       => 300.00,
            'image_url'   => 'https://via.placeholder.com/300x200',
        ]);
    }
}
