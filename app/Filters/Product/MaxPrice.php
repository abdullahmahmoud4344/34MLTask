<?php

namespace App\Filters\Product;

use App\Models\Variant;
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
        $variants = Variant::where('price', '<=', $value)->get();
        $variantsIDs = [];
        if ($variants->count() > 0)
            foreach ($variants as $variant)
                array_push($variantsIDs, $variant->id);
        $this->query->whereHas('variants', function ($q) use ($variantsIDs) {
            $q->wherein('id', $variantsIDs);
        });
    }
}
