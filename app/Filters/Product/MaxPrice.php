<?php

namespace App\Filters\Product;

use App\Utilities\FilterContract;

class MaxPrice implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->whereHas('variants', function ($q) use ($value) {
            $q->where('price', '<=', $value);
        });
    }
}
