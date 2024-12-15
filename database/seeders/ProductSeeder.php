<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Áo Thun Nam',
            'description' => 'Áo thun chất liệu cotton thoáng mát.',
            'price' => 150000,
            'quantity' => 100,
            'image_url' => 'https://cf.shopee.vn/file/b10ced2bacdf4f9abe45d6a826e62e18'
        ]);
    
        Product::create([
            'name' => 'Giày Thể Thao',
            'description' => 'Giày thể thao bền, đẹp.',
            'price' => 450000,
            'quantity' => 50,
            'image_url' => 'https://via.placeholder.com/300'
        ]);
    
        Product::create([
            'name' => 'Balo Du Lịch',
            'description' => 'Balo đa năng, tiện lợi.',
            'price' => 250000,
            'quantity' => 30,
            'image_url' => 'https://via.placeholder.com/300'
        ]); 
        Product::create([
            'name' => 'Balo Du Lịch',
            'description' => 'Balo đa năng, tiện lợi.',
            'price' => 250000,
            'quantity' => 30,
            'image_url' => 'https://via.placeholder.com/300'
        ]); 
        
    }
}
