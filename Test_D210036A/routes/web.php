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

Route::get('/contactUs', function () {
    return view ('contact');
});

Route::get('/addroominfo',function(){
    return view('addroominfo');
});

Route::post('/addroominfo/store',[App\Http\Controllers\RoomController::class,'add'])->name('addroominfo');

Route::get('/viewInfo', [App\Http\Controllers\CategoryController::class,'view'])->name('viewInfo');

Route::get('/deleteInfo/{id}', [App\Http\Controllers\CategoryController::class,'delete'])->name('deleteInfo');

