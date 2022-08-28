<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function show(Request $request)
    // {
    //     $query = $request->query();
    //     switch ($query) {
    //         case in_array("average_rating", array_keys($query)):
    //             return Product::get()->where('average_rating', (float)$query['average_rating']);
    //         case in_array("options", array_keys($query)):
    //             $options = Product::get()->first()->options;
    //         case in_array("max_price", array_keys($query)):
    //             $varints = Product::get()->first()->variant;
    //             Product::get()->where('')
    //             return Product::get()->whereHas('variants', function ($q) {
    //                 $q->where('prdouct_id',
    //             );
    //             });
    //     }
    //     return Product::all();
    // }
    public function index()
    {
        return Product::filterBy(request()->all())->get();
    }
}
