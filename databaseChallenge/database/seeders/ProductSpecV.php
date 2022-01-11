<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSpecV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table("products_spec_values")->insert([       
            "product_id" => 1,
            "spec_value_id" => 1,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 4,
            "spec_value_id" => 2,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 7,
            "spec_value_id" => 3,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 10,
            "spec_value_id" => 4,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 13,
            "spec_value_id" => 5,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 16,
            "spec_value_id" => 1,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 19,
            "spec_value_id" => 3,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 20,
            "spec_value_id" => 6,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 17,
            "spec_value_id" => 7,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 14,
            "spec_value_id" => 8,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 11,
            "spec_value_id" => 9,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 8,
            "spec_value_id" => 6,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 5,
            "spec_value_id" => 7,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 2,
            "spec_value_id" => 8,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 3,
            "spec_value_id" => 10,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 3,
            "spec_value_id" => 11,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 6,
            "spec_value_id" => 11,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 6,
            "spec_value_id" => 10,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 6,
            "spec_value_id" => 1,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 6,
            "spec_value_id" => 12,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 6,
            "spec_value_id" => 6,
        ]);


        DB::table("products_spec_values")->insert([       
            "product_id" => 9,
            "spec_value_id" => 12,
        ]);
        
        DB::table("products_spec_values")->insert([       
            "product_id" => 9,
            "spec_value_id" => 11,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 12,
            "spec_value_id" => 10,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 15,
            "spec_value_id" => 11,
        ]);

        DB::table("products_spec_values")->insert([       
            "product_id" => 18,
            "spec_value_id" => 12,
        ]);
    }
}
