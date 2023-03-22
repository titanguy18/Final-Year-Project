<?php

use App\Http\Controllers\Controller;
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
//Route::get ( to something) 
//Route::post (to change something)

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view ('contact');
});

Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::get('/addProduct',function(){
    return view('addProduct');
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::get('/viewCategory',[App\Http\Controllers\CategoryController::class, 'view'])->name('viewCategory');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');

Route::get('/categoryDetail/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class, 'update'])->name('updateCategory');

Route::post('/addProduct/store',[App\Http\Controllers\ProductController::class,'add'])->name('addProduct');

Route::get('/viewProduct',[App\Http\Controllers\ProductController::class, 'view'])->name('viewProduct');

Route::get('/deleteProduct/{id}',[App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');


//Route::get('/updateProduct',[App\Http\Controllers\ProductController::class, 'update'])->name('editProduct');

Route::get('/productDetail/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->name('editProduct');

Route::get('/showProduct',[App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/showProductDetail/{id}',[App\Http\Controllers\ProductController::class, 'showDetail'])->name('showProductDetail');

Route::put('updateProduct/{id}',[App\Http\Controllers\ProductController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/myCart',[App\Http\Controllers\CartController::class, 'showMyCart'])->name('myCart');

Route::post('/addCart',[App\Http\Controllers\CartController::class, 'add'])->name('addCart');

Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

Route::post('/searchProduct',[App\Http\Controllers\ProductController::class,'searchProduct'])->name('searchProduct');
