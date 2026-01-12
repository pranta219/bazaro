<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Magic Keyboard for iPad Air',
                'slug' => 'magic-keyboard-ipad-air',
                'description' => 'A timeless leather jacket for any occasion.',
                'price' => 280.00,
                'sale_price' => 260.00,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-1/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Logitech G502 Gaming Mouse',
                'slug' => 'logitech-g502-gaming-mouse',
                'description' => 'High performance gaming mouse.',
                'price' => 89.99,
                'sale_price' => null,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-2/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Apple Watch Series 7',
                'slug' => 'apple-watch-series-7',
                'description' => 'High-performance smart watch.',
                'price' => 320.00,
                'sale_price' => 299.99,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-3/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Sony WH-1000XM4',
                'slug' => 'sony-wh-1000xm4',
                'description' => 'Noise cancelling headphones.',
                'price' => 350.00,
                'sale_price' => 299.00,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-4/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Playstation 5 Controller',
                'slug' => 'playstation-5-controller',
                'description' => 'Next-gen gaming controller.',
                'price' => 69.99,
                'sale_price' => null,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-5/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Xbox Series X Controller',
                'slug' => 'xbox-series-x-controller',
                'description' => 'Xbox wireless controller.',
                'price' => 59.99,
                'sale_price' => null,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-6/product-1.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'slug' => 'samsung-galaxy-s21',
                'description' => 'Flagship smartphone.',
                'price' => 799.99,
                'sale_price' => 699.99,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-7/product-1.jpg',
                'is_featured' => false,
            ],
            [
                'name' => 'iPhone 13 Pro',
                'slug' => 'iphone-13-pro',
                'description' => 'Pro camera system.',
                'price' => 999.00,
                'sale_price' => null,
                'category' => 'Electronics',
                'image' => 'assets/img/electronics/arrival-product/product-8/product-1.jpg',
                'is_featured' => true,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
