<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    public static function findByCode($coupon_code){
        return self::where('coupon_code',$coupon_code)->first();
       }

    protected $fillable=[
    'dish_id',
        'coupon_title',
        'coupon_price',
        'coupon_code',
        'coupon_limit',
        'coupon_used',
        'coupon_status',
        'added_on'
];
Protected $primaryKey = 'coupon_id';
}
