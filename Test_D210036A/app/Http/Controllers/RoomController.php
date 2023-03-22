<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\room;

class RoomController extends Controller
{
    public function add(){
        $r=request();
        $addroominfo=room::create([
            'name'=>$r->catName
        ]);
        return view('addroominfo');
    }
}
