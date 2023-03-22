<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Room;

class CategoryController extends Controller
{
    public function add(){
        $r=request();//gets data from text input
        $addInfo=Room::create([
            'TypeID' => $r -> ID,
            'Name' => $r -> Name,
            'Description' => $r -> Description,
            'Price' => $r -> Price,
        ]);
        return view('addInfo');
    }

    public function view(){
        $viewAll=Room::all();
        return view('viewInfo')->with('informations', $viewAll);
    }

    public function delete($id){
        $deleteInfo=Room::find($id);
        $deleteInfo->delete();
        return redirect ()->route('viewInfo');
    }
}
