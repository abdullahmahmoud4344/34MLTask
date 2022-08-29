<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('options')->delete();

        \DB::table('options')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'size',
                'values' => '["s", "m", "l"]',
                'product_id' => 2
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'color',
                'values' => '["Red", "Green", "Yellow"]',
                'product_id' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'size',
                'values' => '["s", "m", "l"]',
                'product_id' => 2
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'size',
                'values' => '["s", "m", "l"]',
                'product_id' => 3
            ),
        ));
    }
}
