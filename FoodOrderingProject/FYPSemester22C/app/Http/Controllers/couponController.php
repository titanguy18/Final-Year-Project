<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Gloudemans\Shoppingcart\Cart;

class CouponController extends Controller
{
      public function index(){
    return view('Dashboard.addCoupon');
   }

      public function store(){
      return 'adding coupon';

   }

   public function code_save(Request $request){
    $coupon = new Coupon();
    $coupon->coupon_title = $request->coupon_title;
    $coupon->dish_id = $request->dish_id;
    $coupon->coupon_price = $request->coupon_price;
    $coupon->coupon_code = $request->coupon_code;
    $coupon->coupon_limit = $request->coupon_limit;
    $coupon->coupon_used = $request->coupon_used;
    $coupon->coupon_status = $request->coupon_status;
    $coupon->added_on = $request->added_on;
    $coupon->save();

    return back()->with('sms','Coupon Saved');
   }

   public function code_manage(){
    $coupons = Coupon::all();

    return view('Dashboard.manageCoupon', compact('coupons'));
   }

    public function code_inactive($coupon_id){
    $coupon = Coupon::find($coupon_id);
$coupon->coupon_status = 0;
$coupon->save();
    return back();
   }

   public function code_active($coupon_id){
    $coupon = Coupon::find($coupon_id);
$coupon->coupon_status = 1;
$coupon->save();
    return back();
   }

public function code_delete($coupon_id){
    $coupon = Coupon::find($coupon_id);
    $coupon->delete();

    return back();
}
public function code_check($coupon_id){
    $coupon = Coupon::find($coupon_id);
    $coupon->delete();

    return back();
}

    public function code_update(Request $request) {
        $coupon = Coupon::find($request->coupon_id);

        $coupon->coupon_title = $request->coupon_title;
    $coupon->dish_id = $request->dish_id;
    $coupon->coupon_price = $request->coupon_price;
    $coupon->coupon_code = $request->coupon_code;
        $coupon->save();

        return back()->with('sms', 'Coupon Updated');
    }
}

