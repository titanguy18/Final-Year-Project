<?php

use Illuminate\Support\Facades\Route;

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

Route::get('addCar',function() {
    return view('addCar');
});

Route::get('/carDetail/{id}', [App\Http\Controllers\CarController::class,'edit'])->name('editCar');

Route::post('/addCar/store', [App\Http\Controllers\CarController::class,'add'])->name('addCar');

Route::get('/viewCar',[App\Http\Controllers\CarController::class,'view'])->name('viewCar');

Route::post('/updateCar',[App\Http\Controllers\CarController::class, 'update'])->name('updateCar');

Route::get('/deleteCar/{id}',[App\Http\Controllers\CarController::class, 'delete'])->name('deleteCar');