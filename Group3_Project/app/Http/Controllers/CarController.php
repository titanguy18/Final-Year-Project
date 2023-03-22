<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Car;
use App\Exports\CarExport;
use Excel;

class CarController extends Controller
{
    public function add(){
        $r=request(); 
        $addCar=Car::create([
            'car'=>$r->car,
            'description'=>$r->description,
            'quantity'=>$r->quantity,
            'price'=>$r->price,
            'brand'=>$r->categoryID,
            ]);
        return view('addCar');
        }

    public function view() {
        $viewAll=Car::all();
            return view('viewCar')->with('cars',$viewAll);
        }

    public function exportCar()
    {
        return Excel::download(new CarExport, 'Car.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new CarExport. 'Car.csv');
    }
    }

