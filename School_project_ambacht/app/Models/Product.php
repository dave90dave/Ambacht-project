<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'per_unit',
        'amount',
        'photo',
        'active',
        'description',
    ];

    public function scopeUserProductsActive($idLoggedinUser)
    {
        $userProducts = Product::all()->where('user_id', $idLoggedinUser)->count();
        return $userProducts;
    }

    public function market(){
        return $this->belongsToMany(Market::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }
}

