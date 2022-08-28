<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();

        \DB::table('products')->insert(array(

            0 =>
            array(
                'id' => 1,
                'title' => "T-shirts",
                'is_in_stock' => true,
                'average_rating' => 0.0
            ),
            1 =>
            array(
                'id' => 2,
                'title' => "Jackets",
                'is_in_stock' => true,
                'average_rating' => 0.0,
            ),
        ));
    }
}
