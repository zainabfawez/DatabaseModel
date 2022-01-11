<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


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
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 3,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 5,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 5,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 4,
            'brand_id' => 2,
        ]);
        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 4,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 2,
            'brand_id' => 2,
        ]);
        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 5,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 3,
            'brand_id' => 5,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 2,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 1,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 4,
            'brand_id' => 3,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 4,
            'brand_id' => 3,
        ]);
        
        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 5,
            'brand_id' => 2,
        ]);
        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 4,
            'brand_id' => 2,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 3,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 1,
            'brand_id' => 5,
        ]);

        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 2,
            'brand_id' => 3,
        ]);
        Product::create([
            'product_name' => 'product'.random_int(1,1000),
            'category_id' => 3,
            'brand_id' => 5,
        ]);
    }
}
