<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $casts = [
        'values' => 'array'
    ];
    public $timestamps = false;

    //relations
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
