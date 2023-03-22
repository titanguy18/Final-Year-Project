<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Menu extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable=[
        'category_id',
        'dish_name',
        'dish_detail',
        'dish_image',
        'dish_status',
        'price',
        'discount',
        'date',
        'time',
        'added_on'

    ];
    protected $primaryKey = 'dish_id';
}
