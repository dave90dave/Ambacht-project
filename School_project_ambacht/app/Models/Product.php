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

    public function scopeActive($query, $state)
    {
        return $query->where('active', '=', $state);
    }

    public function scopeApproved($query, $state)
    {
        return $query->where('approved', '=', $state);
    }

    public function scopeProductIsInMarket()
    {
        # code...
    }

    public function scopeProductIsFromUser()
    {
        # code...
    }

    public function market(){
        return $this->belongsToMany(Market::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }
}

