<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoryBrand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories_brands")->insert([       
            "category_id" => 1,
            "brand_id" => 2,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 1,
            "brand_id" => 3,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 4,
            "brand_id" => 2,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 5,
            "brand_id" => 2,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 3,
            "brand_id" => 5,
        ]);

      
        DB::table("categories_brands")->insert([       
            "category_id" => 1,
            "brand_id" => 5,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 4,
            "brand_id" => 3,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 2,
            "brand_id" => 2,
        ]);

        
        DB::table("categories_brands")->insert([       
            "category_id" => 2,
            "brand_id" => 3,
        ]);

        DB::table("categories_brands")->insert([       
            "category_id" => 1,
            "brand_id" => 1,
        ]);
    }
}
