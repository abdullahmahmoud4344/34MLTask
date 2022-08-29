<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('option_values')->delete();

        \DB::table('option_values')->insert(array(
            0 =>
            array(
                'id' => 1,
                'value' => 'small',
                'variant_id' => 1,
                'option_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'value' => 'medium',
                'variant_id' => 2,
                'option_id' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'value' => 'large',
                'variant_id' => 3,
                'option_id' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'value' => 'red',
                'variant_id' => 1,
                'option_id' => 2,
            ),
            4 =>
            array(
                'id' => 5,
                'value' => 'green',
                'variant_id' => 2,
                'option_id' => 2,
            ),
            5 =>
            array(
                'id' => 6,
                'value' => 'red',
                'variant_id' => 3,
                'option_id' => 2,
            ),
        ));
    }
}
