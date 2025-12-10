<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{

    public function dummy_products(){
        $products = [
            [
                'name' => 'Wooden Wall Clock',
                'description' => 'product description',
                'price' => 29,
                'stock' => 1,
                'status' => 'active',
                'image' => '',
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Gray Vintage Chair',
                'description' => 'product description',
                'price' => 62,
                'stock' => 1,
                'status' => 'active',
                'image' => '',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'Small Gray Table',
                'description' => 'product description',
                'price' => 17,
                'stock' => 1,
                'status' => 'active',
                'image' => '',
                'category_id' => 3,
                'user_id' => 1
            ],
            [
                'name' => 'Cableknit Shawl',
                'description' => 'product description',
                'price' => 99,
                'stock' => 1,
                'status' => 'active',
                'image' => '',
                'category_id' => 4,
                'user_id' => 1
            ],
        ];

        return $products;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert($this->dummy_products());
    }
}