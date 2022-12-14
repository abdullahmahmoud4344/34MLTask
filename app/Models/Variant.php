<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $with = ['optionValues'];
    public $timestamps = false;

    //relations
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
    public function optionValues()
    {
        return $this->hasMany(OptionValue::class);
    }
}
