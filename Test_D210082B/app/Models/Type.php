<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable=['ID','Name'];

    public function Room(){
        return $this->hasMany('App\Models\Room');
    }
}
