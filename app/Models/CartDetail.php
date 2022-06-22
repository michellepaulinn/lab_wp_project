<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function game(){
        return $this->hasOne(Game::class);
    }
    
}
