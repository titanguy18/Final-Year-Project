<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addCar',function() {
    return view('addCar');
});

Route::post('/addCar/store', [App\Http\Controllers\CarController::class,'add'])->name('addCar');

Route::get('/viewCar', [App\Http\Controllers\CarController::class,'view'])->name('viewCar');

Route::get('/exportexcel',[App\Http\Controllers\CarController::class,'exportCar']); 

Route::get('/exportcsv',[App\Http\Controllers\CarController::class,'exportIntoCSV']); 

