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
    protected $with = ['variant'];
    public $timestamps = false;

    //relations
    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
