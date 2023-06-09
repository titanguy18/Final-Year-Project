<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\payment;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function payment(){
        return view('FrontEnd.checkOut.checkout_payment');
    }

    public function order(Request $request){
        $paymentType = $request->payment_type;

        if($paymentType == 'Cash'){
             $order = new Order();
             $order->customer_id = Session::get('customer_id');
             $order->shipping_id = Session::get('shipping_id');
             $order->order_total = Session::get('sum');
             $order->save();

             $payMent = new payment();
             $payMent->order_id = $order->order_id;
             $payMent->payment_type = $paymentType;
             $payMent->save();

             $CartDish = Cart::content();

             foreach($CartDish as $cart) {
                   $orderDetail = new OrderDetail();
                   $orderDetail->order_id = $order->order_id;
                   $orderDetail->dish_id = $cart->id;
                   $orderDetail->dish_name = $cart->name;
                   if($cart->half_price ==null) {
                      $orderDetail->dish_price = $cart->price;
                   }
                   elseif($cart->half_price !==null) 
                   {
                      $orderDetail->dish_price = $cart->price;
                      $orderDetail->dish_price = $cart->half_price;
                   }
                  
                   $orderDetail->dish_qty = $cart->qty;
                   $orderDetail->save();
             }
                Cart::destroy();
                 Session::flash('success', 'Your order has been successfully processed.');
                return redirect('checkout/order/complete');
             

        } elseif ($paymentType == 'Stripe'){
             $order = new Order();
             $order->customer_id = Session::get('customer_id');
             $order->shipping_id = Session::get('shipping_id');
             $order->order_total = Session::get('sum');
             $order->save();

             $payMent = new payment();
             $payMent->order_id = $order->order_id;
             $payMent->payment_type = $paymentType;
             $payMent->save();

             $CartDish = Cart::content();

             foreach($CartDish as $cart) {
                   $orderDetail = new OrderDetail();
                   $orderDetail->order_id = $order->order_id;
                   $orderDetail->dish_id = $cart->id;
                   $orderDetail->dish_name = $cart->name;
                   if($cart->half_price ==null) {
                      $orderDetail->dish_price = $cart->price;
                   }
                   elseif($cart->half_price !==null) 
                   {
                      $orderDetail->dish_price = $cart->price;
                      $orderDetail->dish_price = $cart->half_price;
                   }
                  
                   $orderDetail->dish_qty = $cart->qty;
                   $orderDetail->save();
             }
                Cart::destroy();

                return redirect('/stripe/payment');
        }
    }

    public function stripe(){
        return view('payment');
    }
    public function complete(){
        
            return view('FrontEnd.checkOut.order_complete');
        }
}
