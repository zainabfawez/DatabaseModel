<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            SpecSeeder::class,
            ProductSeeder::class,
            SpecValueSeeder::class,
            CategoryBrand::class,
            ProductSpec::class,
            ProductSpecV::class,
        ]);
    }
}
