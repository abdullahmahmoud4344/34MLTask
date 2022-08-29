<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\ProductTableSeeder;
use Database\Seeders\VariantTableSeeder;

use Illuminate\Testing\Fluent\AssertableJson;

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
            ])->assertJsonCount(2);
    }

    public function test_product_filter_by_max_price()
    {
        //create 5 products product t-shirt has an id of 1  and jacket has an id of 2
        $this->seed(ProductTableSeeder::class);

        //create 4 variants assume that only products t-shirt and jacket has price less than 31
        $this->seed(VariantTableSeeder::class);

        $filter = ['max_price' => 30];
        $this->json('get', '/api/products', $filter)
            ->assertJsonFragment([
                'product_id' => 1,
                'product_id' => 2,
            ])->assertJsonCount(2);
    }
}
