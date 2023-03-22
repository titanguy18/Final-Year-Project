<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Order;
use App\Models\payment;
use App\Models\Shipping;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class checkOutController extends Controller
{
    public function payment(){
        return view('/checkout/order/complete');
    }

    public function payCash(Request $request){
         $paymentType = $request->payment_type;
        $paymentType == 'Cash';
         $order = new Order();
             $order->customer_id = Session::get('customer_id');
             $order->order_total = Session::get('totalAmount');
             $order->save();

             $payMent = new payment();
             $payMent->order_id = $order->order_id;
             $payMent->payment_type = $paymentType;
             $payMent->save();

             $CartDish = Cart::content();

             foreach($CartDish as $cart) {
                   $orderDetail = new OrderDetail();
                   $orderDetail->dish_id = $cart->id;
                   $orderDetail->dish_quantity = $cart->qty;
                   $orderDetail->dish_name = $cart->name;
                   $orderDetail->price = $cart->price;
                   $orderDetail->order_id = $order->order_id;

                   $orderDetail->save();
             }
                Cart::destroy();
                 Session::flash('success', 'Your order has been successfully processed.');
                return redirect('checkout/order/complete');
    } 

    public function payStripe(Request $request){
         $paymentType = $request->payment_type;
        $paymentType == 'Stripe';
         $order = new Order();
             $order->customer_id = Session::get('customer_id');
             $order->order_total = Session::get('totalAmount');
             $order->save();

             $payMent = new payment();
             $payMent->order_id = $order->order_id;
             $payMent->payment_type = $paymentType;
             $payMent->save();

             $CartDish = Cart::content();

            foreach($CartDish as $cart) {
                   $orderDetail = new OrderDetail();
                   $orderDetail->dish_id = $cart->id;
                   $orderDetail->dish_quantity = $cart->qty;
                   $orderDetail->dish_name = $cart->name;
                   $orderDetail->price = $cart->price;
                   $orderDetail->order_id = $order->order_id;
                   $orderDetail->date = $cart->date;
                   $orderDetail->time = $cart->time;

                   $orderDetail->save();
             }
                Cart::destroy();

                return redirect('/stripe/payment');
    }

    public function stripe(){
        return view('payment');
    }
    public function complete(){
        
            return view('order_complete');
        }

        public function paymentPost(Request $request)
    {
	       
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);
                   Session::flash('Thanks for Purchasing With Us...!', 'Your order has been placed');

        return redirect('/checkout/order/complete');
    }
}

