<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;

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

Route::get('/',[App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/category/dish/show/{category_id}',[App\Http\Controllers\FrontEndController::class, 'dish_show'])->name('category_dish');

/*---------------- Cart start here-----------*/
Route::post('/add/cart', [App\Http\Controllers\cartController::class, 'insert'])->name('add_to_cart');
Route::get('/cart/show', [App\Http\Controllers\cartController::class, 'show'])->name('cart_show');
Route::get('/cart/remove/{rowId}', [App\Http\Controllers\cartController::class, 'remove'])->name('remove_item');
Route::post('/cart/update', [App\Http\Controllers\cartController::class, 'update'])->name('update_cart');
/*---------------- Cart end here-----------*/

/*---------------- check out route start here-----------*/
Route::get('/checkout/payment', [App\Http\Controllers\CheckOutController::class, 'payment'])->name('checkout_payment');
Route::post('/checkout/new/order', [App\Http\Controllers\CheckOutController::class, 'order'])->name('new_order');
Route::get('/stripe/payment', [App\Http\Controllers\CheckOutController::class, 'stripe']);
Route::get('/checkout/order/complete', [App\Http\Controllers\CheckOutController::class, 'complete'])->name('order_complete');

/*---------------- check out route end here-----------*/

/*---------------- Mail start here-----------*/
Route::get('/contactUs', function() {
    $mailData = [
        "name" => "Test NAME",
    ];
    Mail::to('D210101B@sc.edu.my')->send(new TestMail($mailData));
});
/*---------------- Mail end here-----------*/

/*---------------- customer route start here-----------*/
Route::get('/store/customer/', [App\Http\Controllers\CustomerController::class, 'show'])->name('sign_up');
Route::post('/register/customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('store_customer');

Route::get('/login/customer/', [App\Http\Controllers\CustomerController::class, 'login'])->name('login_in');
Route::get('/logout/customer/', [App\Http\Controllers\CustomerController::class, 'logout'])->name('log_out');
Route::post('/check/customer/login', [App\Http\Controllers\CustomerController::class, 'check'])->name('check_login');

Route::get('/shipping', [App\Http\Controllers\CustomerController::class, 'shipping'])->name('shipping');
Route::post('/shipping/store', [App\Http\Controllers\CustomerController::class, 'save'])->name('store_shipping');
/*---------------- customer route end here-----------*/

//admin login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function(){

/*---------------- Catogory start here-----------*/
Route::get('/add',[App\Http\Controllers\categoryController::class, 'index'])->name('show_cate_table');

Route::post('/save',[App\Http\Controllers\categoryController::class, 'save'])->name('cate_save');
Route::get('/manage',[App\Http\Controllers\categoryController::class, 'manage'])->name('manage_cate');

Route::get('/active/{category_id}',[App\Http\Controllers\categoryController::class, 'active'])->name('category_active');

Route::get('/Inactive/{category_id}',[App\Http\Controllers\categoryController::class, 'Inactive'])->name('Inactive_cate');
Route::get('/delete/{category_id}',[App\Http\Controllers\categoryController::class, 'delete'])->name('cate_delete');
Route::post('/update', [App\Http\Controllers\categoryController::class, 'update'])->name('cate_update');
/*---------------- Catogory end here-----------*/

});

Route::prefix('delivery')->group(function(){
/*---------------- Delivery Boy start here-----------*/
Route::get('/boy/add',[App\Http\Controllers\deliverBoyController::class, 'index'])->name('show_deliveryBoy_add_table');
Route::post('/boy/save', [App\Http\Controllers\deliverBoyController::class, 'save_boy'])->name('delivery_save');
Route::get('/boy/manage', [App\Http\Controllers\deliverBoyController::class, 'boy_manage'])->name('delivery_boy_manage');
Route::get('/boy/delete/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_delete'])->name('delivery_boy_delete');
Route::get('/boy/inactive/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_inactive'])->name('delivery_boy_inactive');
Route::get('/boy/active/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_active'])->name('delivery_boy_active');
Route::post('/boy/update', [App\Http\Controllers\deliverBoyController::class, 'boy_update'])->name('delivery_boy_update');
/*---------------- Delivery Boy end here-----------*/
});

Route::prefix('coupon')->group(function(){
/*---------------- Coupon Code start here-----------*/
Route::get('/code/add',[App\Http\Controllers\CouponController::class, 'index'])->name('show_coupon_table');
Route::post('/code/save', [App\Http\Controllers\CouponController::class, 'code_save'])->name('save_coupon_code');
Route::get('/code/manage', [App\Http\Controllers\CouponController::class, 'code_manage'])->name('manage_coupon_code');
Route::get('/code/inactive/{coupon_id}', [App\Http\Controllers\CouponController::class, 'code_inactive'])->name('inactive_coupon_code');
Route::get('/code/active/{coupon_id}', [App\Http\Controllers\CouponController::class, 'code_active'])->name('active_coupon_code');
Route::get('/code/delete/{coupon_id}', [App\Http\Controllers\CouponController::class, 'code_delete'])->name('delete_coupon_code');
Route::post('/code/update', [App\Http\Controllers\CouponController::class, 'code_update'])->name('update_coupon_code');
/*---------------- Coupon Code end here-----------*/
});

Route::prefix('dish')->group(function(){
/*---------------- Dish start here-----------*/
Route::get('/add', [App\Http\Controllers\DishController::class, 'index'])->name('show_dish_table');
Route::post('/save', [App\Http\Controllers\DishController::class, 'save_dish'])->name('save_dish_table');
Route::get('/manage', [App\Http\Controllers\DishController::class, 'manage_dish'])->name('manage_dish_table');
Route::get('/inactive/{dish_id}', [App\Http\Controllers\DishController::class, 'inactive'])->name('dish_inactive');
Route::get('/active/{dish_id}', [App\Http\Controllers\DishController::class, 'active'])->name('dish_active');
Route::get('/delete/{dish_id}', [App\Http\Controllers\DishController::class, 'delete'])->name('delete_dish');
Route::post('/update', [App\Http\Controllers\DishController::class, 'dish_update'])->name('update_dish');
});
/*---------------- Dish end here-----------*/


/*---------------- Stripe start here-----------*/
// stripe payment 
Route::get('/stripe-payment', [App\Http\Controllers\StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [App\Http\Controllers\StripeController::class, 'handlePost'])->name('stripe.payment');
/*---------------- Stripe end here-----------*/

/*---------------- Order start here-----------*/
Route::get('/order/manage', [App\Http\Controllers\OrderController::class, 'manageOrder'])->name('show_order');
Route::get('/view/order/detail/{order_id}', [App\Http\Controllers\OrderController::class, 'viewOrder'])->name('view_order');
Route::get('/view/invoice/{order_id}', [App\Http\Controllers\OrderController::class, 'viewInvoice'])->name('view_order_invoice');
//Route::get('/download/invoice/{order_id}', [App\Http\Controllers\OrderController::class, 'downloadInvoice'])->name('download_order_invoice');
Route::get('/download/invoice/{order_id}',[App\Http\Controllers\OrderController::class,'downloadInvoice'])->name('download_order_invoice');
Route::get('/order/delete/{order_id}', [App\Http\Controllers\OrderController::class, 'deleteOrder'])->name('delete_order');
/*---------------- Order end here-----------*/






