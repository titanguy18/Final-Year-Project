<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fiilable=['amount','creditCard','paymentStatus'];

    public function myOrder(){
        return $this->hasOne('App\Models\myOrder');
    }
}
