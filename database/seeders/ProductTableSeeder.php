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
                'average_rating' => 3.0
            ),
            1 =>
            array(
                'id' => 2,
                'title' => "Jackets",
                'is_in_stock' => true,
                'average_rating' => 3.0,
            ),
            2 =>
            array(
                'id' => 3,
                'title' => "Shorts",
                'is_in_stock' => true,
                'average_rating' => 5.0,
            ),
            3 =>
            array(
                'id' => 4,
                'title' => "Shoes",
                'is_in_stock' => true,
                'average_rating' => 6.0,
            ),
            4 =>
            array(
                'id' => 5,
                'title' => "Wallet",
                'is_in_stock' => true,
                'average_rating' => 8.0,
            ),
        ));
    }
}
