<?php

namespace App\Filters\Product;

use App\Utilities\FilterContract;

class Options implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $filters = preg_split("/\,/", $value);
        $this->query->whereHas('optionValues', function ($query) use ($filters) {
            $query->distinct()->wherein('value', $filters);
        })->get();
    }
}
