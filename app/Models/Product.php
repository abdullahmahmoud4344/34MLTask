<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Utilities\FilterBuilder;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public $timestamps = false;
    protected $with = ['variants'];
    protected $appends = ['options', 'default_variant'];

    //relations
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    //attributes
    public function getDefaultVariantAttribute()
    {
        $variants = $this->variants;
        if ($variants)
            return $variants->sortBy('price')->first();
    }

    public function getOptionsAttribute()
    {
        $variants = $this->variants;
        $options = [];
        foreach ($variants as $variant) {
            array_push($options, $variant->options);
        }
        return $options;
    }
}
