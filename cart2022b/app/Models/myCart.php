<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;
    protected $fillable=['productId','quantity','userID','dateAdd','orderID'];

    public function Product(){
        return $this->hasMany('App\Models\Product');
    }
    
    public function User(){
        return $this->belongsTo('App\Models\User');

    }
}
