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

    public function scopeActive($query, $state)
    {
        return $query->where('active', '=', $state);
    }

    public function scopeApproved($query, $state)
    {
        return $query->where('approved', '=', $state);
    }
    public function scopeOfUser($query, $id)
    {
        return $query->where('user_id', '=', $id);
    }

    public function products(){
        return $this->HasMany(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
