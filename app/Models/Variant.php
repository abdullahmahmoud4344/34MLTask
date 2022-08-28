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
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
    //attributes
    public function getoption1Attribute(): string
    {
        if ($this->options)
            return $this->options[0]->name;
        return "Empty";
    }
    public function getoption2Attribute()
    {
        if (count($this->options) > 1)
            return $this->options[1]->name;
        return "Empty";
    }
}
