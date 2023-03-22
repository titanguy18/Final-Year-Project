<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*S
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});

Route::get('/',[App\Http\Controllers\FrontEndController::class, 'index']);
//Route::get('menu', function () { return view('menu');}); 

Route::get('/menu/show/{category_id}',[App\Http\Controllers\FrontEndController::class, 'dish_show'])->name('category_dish');

//Route::get('/order/proceed/{dish_id}', [App\Http\Controllers\FrontEndController::class, 'proceedOrder'])->name('proceed_order');


Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('payment', function () {return view('payment');});

//Route::get('userRegister', function () {return view('userRegister');});

//Route::get('userLogin', function () {return view('userLogin');});

/*---------------- User route start here-----------*/

//Route::get('userLogin', function () { return view('userLogin');});

Route::get('forgetPassword', function () {
    return view('forgetPassword');
});

Route::post('contact', [App\Http\Controllers\ContactController::class,'add'])->name('addContact');

//Route::get('userRegister', function () {return view('userRegister');});
Route::get('/userRegister', [App\Http\Controllers\userController::class, 'show'])->name('sign_up');
Route::post('/register/customer', [App\Http\Controllers\userController::class, 'store'])->name('store_customer');

Route::get('/userLogin', [App\Http\Controllers\userController::class, 'login'])->name('login_in');
Route::get('/logout/customer/', [App\Http\Controllers\userController::class, 'logout'])->name('log_out');
Route::post('/', [App\Http\Controllers\userController::class, 'check'])->name('check_login');

/*---------------- User route end here-----------*/

/*---------------- Catogory start here-----------*/
Route::get('/add',[App\Http\Controllers\categoryController::class, 'index'])->name('show_cate_table');

Route::post('/save',[App\Http\Controllers\categoryController::class, 'save'])->name('cate_save');
Route::get('/manage',[App\Http\Controllers\categoryController::class, 'manage'])->name('manage_cate');

Route::get('/active/{category_id}',[App\Http\Controllers\categoryController::class, 'active'])->name('category_active');

Route::get('/Inactive/{category_id}',[App\Http\Controllers\categoryController::class, 'Inactive'])->name('Inactive_cate');
Route::get('/delete/{category_id}',[App\Http\Controllers\categoryController::class, 'delete'])->name('cate_delete');
Route::post('/update', [App\Http\Controllers\categoryController::class, 'update'])->name('cate_update');
/*---------------- Catogory end here-----------*/

Route::prefix('coupon')->group(function(){
    /*---------------- Coupon Code start here-----------*/
    Route::get('/code/add',[App\Http\Controllers\couponController::class, 'index'])->name('show_coupon_table');
    Route::post('/code/save', [App\Http\Controllers\couponController::class, 'code_save'])->name('save_coupon_code');
    Route::get('/code/manage', [App\Http\Controllers\couponController::class, 'code_manage'])->name('manage_coupon_code');
    Route::get('/code/inactive/{coupon_id}', [App\Http\Controllers\couponController::class, 'code_inactive'])->name('inactive_coupon_code');
    Route::get('/code/active/{coupon_id}', [App\Http\Controllers\couponController::class, 'code_active'])->name('active_coupon_code');
    Route::get('/code/delete/{coupon_id}', [App\Http\Controllers\couponController::class, 'code_delete'])->name('delete_coupon_code');
    Route::post('/code/update', [App\Http\Controllers\couponController::class, 'code_update'])->name('update_coupon_code');
    Route::post('/code/check', [App\Http\Controllers\couponController::class, 'store'])->name('coupon_store');
    Route::delete('/code/destroy', [App\Http\Controllers\couponController::class, 'code_update'])->name('coupon_destroy');
    /*---------------- Coupon Code end here-----------*/
    });

Route::prefix('dish')->group(function(){
    /*---------------- Dish start here-----------*/
    Route::get('/add', [App\Http\Controllers\MenuController::class, 'index'])->name('show_dish_table');
    Route::post('/save', [App\Http\Controllers\MenuController::class, 'save_dish'])->name('save_dish_table');
    Route::get('/manage', [App\Http\Controllers\MenuController::class, 'manage_dish'])->name('manage_dish_table');
    Route::get('/inactive/{dish_id}', [App\Http\Controllers\MenuController::class, 'inactive'])->name('dish_inactive');
    Route::get('/active/{dish_id}', [App\Http\Controllers\MenuController::class, 'active'])->name('dish_active');
    Route::get('/delete/{dish_id}', [App\Http\Controllers\MenuController::class, 'delete'])->name('delete_dish');
    Route::post('/update', [App\Http\Controllers\MenuController::class, 'dish_update'])->name('update_dish');
    });
    /*---------------- Dish end here-----------*/

   /*---------------- Cart start here-----------*/
Route::post('/add/cart', [App\Http\Controllers\cartController::class, 'insert'])->name('add_to_cart');
Route::get('/cart/show', [App\Http\Controllers\cartController::class, 'show'])->name('cart_show');
Route::get('/cart/remove/{rowId}', [App\Http\Controllers\cartController::class, 'remove'])->name('remove_item');
Route::post('/cart/update', [App\Http\Controllers\cartController::class, 'update'])->name('update_cart');
Route::get('/myCart',[App\Http\Controllers\cartController::class, 'showMyCart'])->name('myCart');
/*---------------- Cart end here-----------*/

/*---------------- Order start here-----------*/
Route::get('/order/manage', [App\Http\Controllers\OrderController::class, 'manageOrder'])->name('show_order');
Route::get('/view/order/detail/{order_id}', [App\Http\Controllers\OrderController::class, 'viewOrder'])->name('view_order');
Route::get('/view/invoice/{order_id}', [App\Http\Controllers\OrderController::class, 'viewInvoice'])->name('view_order_invoice');
//Route::get('/download/invoice/{order_id}', [App\Http\Controllers\OrderController::class, 'downloadInvoice'])->name('download_order_invoice');
Route::get('/download/invoice/{order_id}',[App\Http\Controllers\OrderController::class,'downloadInvoice'])->name('download_order_invoice');
Route::get('/order/delete/{order_id}', [App\Http\Controllers\OrderController::class, 'deleteOrder'])->name('delete_order');

/*---------------- Order end here-----------*/

/*---------------- check out route start here-----------*/
Route::get('/checkout/payment', [App\Http\Controllers\CheckOutController::class, 'payment'])->name('checkout_payment');
Route::post('/payment/cash', [App\Http\Controllers\CheckOutController::class, 'payCash'])->name('order_by_cash');
Route::post('/payment/stripe', [App\Http\Controllers\CheckOutController::class, 'payStripe'])->name('order_by_stripe');
Route::get('/stripe/payment', [App\Http\Controllers\CheckOutController::class, 'stripe']);
Route::get('/checkout/order/complete', [App\Http\Controllers\CheckOutController::class, 'complete'])->name('order_complete');
/*---------------- check out route end here-----------*/

Route::post('/checkout', [App\Http\Controllers\CheckOutController::class, 'paymentPost'])->name('payment.post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('analysis', [App\Http\Controllers\AnalysisController::class, 'analysis'])->name('analysis');
