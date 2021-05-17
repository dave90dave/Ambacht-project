<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'location',
        'photo',
        'description',
    ];


    public function scopeUserMarketsActive($idLoggedinUser)
    {
        $userMarkets = Market::all()->where('user_id', $idLoggedinUser)->count();
        return $userMarkets;
    }

    public function scopeAllActiveMarketsOfIndividualUser($id)
    {
        $markets = Market::all()->where('active', '=', '1')
        ->where('approved', '=', '1')
        ->where('user_id', '=', $id);
        return $markets;
    }

    public function products(){
        return $this->HasMany(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
