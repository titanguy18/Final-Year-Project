<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\myCart;
use Auth;
use Session;

class CartController extends Controller
{
    public function __constructor(){
        $this->middleware('auth');
    }       

    public function add(){
        $r=request();
        $add=myCart::create([
            'quantity'=>$r->quantity, 
            'orderID'=>'', 
            'productId'=>$r->id, 
            'userID'=>Auth::id(),
        ]);
        Session::flash('success',"Item added to cart!");
        return redirect()->route('showProduct');
    }

    public function showMyCart(){
        $cart=DB::table('my_carts')
        ->leftjoin('products','products.Id','=','my_carts.productId')
        ->select('my_carts.quantity as cartQty','my_carts.id as cid','products.*')
        ->where('my_carts.orderID','=','')
        ->where('my_carts.userID','=',Auth::id())
        ->get();
        //SQL: select my_carts.quantity as cartQty,my_cart.id as cid ,products.* from my_carts left join products on products.id=my_carts.id where my_carts.orderID='' and my_carts.userID='Auth::id()'
        return view('myCart')->with('carts', $cart);
    }

    public function cartItem(){
        $cartItem=0;
        $noItem=DB::table('my_carts')->leftjoin('products','products.id','=','my_carts.productID')
        ->select(DB::raw('COUNT(*) as count_item'))
        ->where('my_carts.orderID','=','')
        ->where('my_carts.userID','=', Auth::id())
        ->groupBy('my_carts.userID')
        ->first();
        if($noItem){
            $cartItem=$noItem->count_item;
        }
        Session()->put('cartItem',$cartItem);
    }
}
