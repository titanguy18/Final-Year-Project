<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['ID','Name','Description','Price','TypeID'];

    public function Type(){
        return $this->hasOne('App\Models\Type');
    }
}

