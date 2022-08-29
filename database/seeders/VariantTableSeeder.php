<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('variants')->delete();

        \DB::table('variants')->insert(array(

            0 =>
            array(
                'id' => 1,
                'title' => "short sleeve",
                'price' => 19.2,
                'stock' => 50,
                'is_in_stock' => true,
                'product_id' => 1,
                'option_id' => 1
            ),
            1 =>
            array(
                'id' => 2,
                'title' => "long sleeve",
                'price' => 19.2,
                'stock' => 50,
                'is_in_stock' => true,
                'product_id' => 2,
                'option_id' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'title' => "cotton",
                'price' => 50,
                'stock' => 50,
                'is_in_stock' => true,
                'product_id' => 3,
                'option_id' => 1
            ),
            3 =>
            array(
                'id' => 4,
                'title' => "sport",
                'price' => 50,
                'stock' => 50,
                'is_in_stock' => true,
                'product_id' => 4,
                'option_id' => 1
            ),
        ));
    }
}
