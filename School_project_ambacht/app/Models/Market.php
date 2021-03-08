<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = [
        'label',
        'location',
        'photo',
        'description',
    ];

    public function products(){
        return $this->HasMany(Product::class);
    }
}
