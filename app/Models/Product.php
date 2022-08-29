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
    protected $appends = ['default_variant'];

    //relations
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function optionValues()
    {
        return $this->hasManyThrough(OptionValue::class, Variant::class);
    }
    //scopes
    public function scopeFilterBy($query, $filters)
    {
        $namespace = 'App\Filters\Product';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
    //attributes
    public function getDefaultVariantAttribute()
    {
        $variants = $this->variants;
        if ($variants)
            return $variants->sortBy('price')->first();
    }
}
