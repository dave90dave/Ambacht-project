<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'per_unit',
        'amount',
        'photo',
        'active',
        'description',
    ];

    public function market(){
        return $this->belongsToMany(Market::class);
    }
}

