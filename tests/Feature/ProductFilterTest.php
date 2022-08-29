<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\ProductTableSeeder;

class ProductFilterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_product_filter_by_average_rating()
    {
        //create 5 products 2 products having rating 3.0
        $this->seed(ProductTableSeeder::class);

        $filter = ['average_rating' => 3];
        $this->json('get', '/api/products', $filter)
            ->assertJsonFragment([
                'average_rating' => 3
            ])->assertJsonCount(2, $key = null);
    }
}
