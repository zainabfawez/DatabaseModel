<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSpec extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table("products_specs")->insert([       
            "product_id" => 1,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 2,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 3,
            "spec_id" =>  3,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 4,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 5,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 6,
            "spec_id" =>  3,
        ]);
        
        DB::table("products_specs")->insert([       
            "product_id" => 6,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 6,
            "spec_id" =>  1,
        ]);
      
        DB::table("products_specs")->insert([       
            "product_id" => 7,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 8,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 9,
            "spec_id" =>  3,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 10,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 11,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 12,
            "spec_id" =>  3,
        ]);
        DB::table("products_specs")->insert([       
            "product_id" => 13,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 14,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 15,
            "spec_id" =>  3,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 16,
            "spec_id" =>  1,
            ]);

        DB::table("products_specs")->insert([       
            "product_id" => 17,
            "spec_id" =>  2,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 18,
            "spec_id" =>  3,
        ]);
        DB::table("products_specs")->insert([       
            "product_id" => 19,
            "spec_id" =>  1,
        ]);

        DB::table("products_specs")->insert([       
            "product_id" => 20,
            "spec_id" =>  2,
        ]);
    
    }
}
