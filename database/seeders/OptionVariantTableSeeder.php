<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionVariantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('option_variant')->delete();

        \DB::table('option_variant')->insert(array(

            0 =>
            array(
                'variant_id' => 1,
                'option_id' => 1,
            ),
            1 =>
            array(
                'variant_id' => 1,
                'option_id' => 2,
            ),
        ));
    }
}
