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
        $this->call(ProductTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(VariantTableSeeder::class);
        $this->call(OptionValueTableSeeder::class);
    }
}
