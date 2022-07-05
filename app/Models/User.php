<?php

namespace App\Models ;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    use Authenticatable;

    protected $guarded=['id'];

    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
