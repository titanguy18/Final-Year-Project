<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\cars;


class CarController extends Controller
{
    public function add(){
        $r=request(); 
        $addCar=cars::create([
            'car'=>$r->car,
            'description'=>$r->description,
            'quantity'=>$r->quantity,
            'price'=>$r->price,
            ]);
        return view('addCar');
        }

    public function view() {
        $viewAll=cars::all();
            return view('viewCar')->with('cars',$viewAll);
        }
    
    public function edit($id) {
        $car=cars::all()->where('id',$id);
        return view('editCar')->with('cars', $car);
    }
    
    public function update() {
        $r=request();
        $car=cars::find($r->id);
        $car->car=$r->car;
        $car->description=$r->description;
        $car->quantity=$r->quantity;
        $car->price=$r->price;
        $car->save();
        return redirect()->route('viewCar');
    }

    public function delete($id) {
        $deletecars=cars::find($id);
        $deletecars->delete();
        return redirect()->route('viewCar');
    }
    }

