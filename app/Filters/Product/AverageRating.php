<?php

namespace App\Filters\Product;

use App\Utilities\FilterContract;

class AverageRating implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('average_rating', $value);
    }
}
