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
                'image' => 'https://sentop.eu/13565-thickbox_default/wooden-wall-clock-roman-numerals-sentop-hdfk029-oak.jpg',
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Gray Vintage Chair',
                'description' => 'product description',
                'price' => 62,
                'stock' => 1,
                'status' => 'active',
                'image' => 'https://cdn20.pamono.com/p/g/1/6/1658269_qlka1al91i/vintage-lounge-chair-in-grey-fabric-3.jpg',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'Small Gray Table',
                'description' => 'product description',
                'price' => 17,
                'stock' => 1,
                'status' => 'active',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdctSvcV__CiyGqXI_cxLAkYNslDAN3rXCGg&s',
                'category_id' => 3,
                'user_id' => 1
            ],
            [
                'name' => 'Cableknit Shawl',
                'description' => 'product description',
                'price' => 99,
                'stock' => 1,
                'status' => 'active',
                'image' => 'https://www.arantraditions.com/cdn/shop/products/SHAWL20-01_82707be8-203b-4601-852f-bd578da85879.jpg?v=1760712876&width=1024',
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