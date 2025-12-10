<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Furniture',
                'slug' => 'furniture',
                'description' => 'Furniture category',
                'image' => '',
                'parent_id' => null,
                'depth' => 0,
                'position' => 0,
                'status' => 'active'
            ],
            [
                'name' => 'Home Decor',
                'slug' => 'home-decor',
                'description' => 'Home Decor category',
                'image' => '',
                'parent_id' => null,
                'depth' => 0,
                'position' => 0,
                'status' => 'active'
            ],
            [
                'name' => 'Kitchen',
                'slug' => 'kitchen',
                'description' => 'Kitchen category',
                'image' => '',
                'parent_id' => null,
                'depth' => 0,
                'position' => 0,
                'status' => 'active'
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Fashion category',
                'image' => '',
                'parent_id' => null,
                'depth' => 0,
                'position' => 0,
                'status' => 'active'
            ]
        ];

        // truncate the categories table

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
