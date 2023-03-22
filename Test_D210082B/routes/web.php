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

Route::get('/addInfo', function(){
    return view('addInfo');
});

Route::post('/addInfo/store', [App\Http\Controllers\CategoryController::class,'add'])->name('addInfo');

Route::get('/viewInfo', [App\Http\Controllers\CategoryController::class,'view'])->name('viewInfo');

Route::get('/deleteInfo/{id}', [App\Http\Controllers\CategoryController::class,'delete'])->name('deleteInfo');