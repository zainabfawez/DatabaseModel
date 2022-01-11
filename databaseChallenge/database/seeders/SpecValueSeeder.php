<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpecValue;


class SpecValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 

            SpecValue::create([
                'spec_value' => random_int(100,1000),
                'spec_id' => 1,
            ]);

        }

        SpecValue::create([
            'spec_value' => "red",
            'spec_id' => 2,
        ]);

        SpecValue::create([
            'spec_value' => "blue",
            'spec_id' => 2,
        ]);

        SpecValue::create([
            'spec_value' => "green",
            'spec_id' => 2,
        ]);

        SpecValue::create([
            'spec_value' => "white",
            'spec_id' => 2,
        ]);

        SpecValue::create([
            'spec_value' => 'keyBoard',
            'spec_id' => 3,
        ]);

        
        SpecValue::create([
            'spec_value' => 'speaker',
            'spec_id' => 3,
        ]);
        
        SpecValue::create([
            'spec_value' => 'touchscreen',
            'spec_id' => 3,
        ]);
        
    }
}
