<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function insert(Request $request){
        $dish= Menu::where('dish_id', $request->dish_id)->first();
        
        Cart::add([  
           'id' => $request->dish_id,
           'qty' => $request->qty,
           'name' => $dish->dish_name,
           'date' => $request->date,
           'time' => $request->time,
           'price' => $dish->price,
           'weight' => 550,
           'options' =>
           [
            'image' => $dish->dish_image
           ],
        ]);

        return back();
    }

    public function show(){
        $CartDish = Cart::content();
$categories = Category::all();
$cartItem=0;
        $cartItem = Cart::count('id');
        return view('cart', compact('CartDish','categories','cartItem'));
    }

    public function update(Request $request){
        Cart::update($request->rowId, $request->qty);

        return back();
    }

    public function remove($rowId){
 Cart::remove($rowId);

 return back();
    }

   // public function cartItem(){
     //   $cartItem=0;
        //$noItem=DB::table('order_details')->leftjoin('order_details', 'order_details.id', '=', 'order_details.dish_id')->select(DB::raw('COUNT(*) as count_item'))->where('order_details.orderID','=','')->where('orders.customer_id','=',User::id())->groupBy('order_details.customer_id')->first();
      //  $cart = Cart::content();
        //$cartItem= $cart->id;
       // if($noItem){$cartItem=$noItem->count_item;}
     //   Session()->put('cartItem', $cartItem);
    //}
}

