<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Spec;

class SpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Spec::create([
            'spec_name' => 'height',
            'spec_type' => 'input',
        ]);

        Spec::create([
            'spec_name' => 'color',
            'spec_type' => 'select',
        ]);

        Spec::create([
            'spec_name' => 'add_ons',
            'spec_type' => 'multi_select',
        ]);
        
    }
}
