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
    protected $with = ['variants'];
    public $timestamps = false;

    //relations
    public function variants()
    {
        return $this->belongsToMany(Variant::class);
    }
    
}
