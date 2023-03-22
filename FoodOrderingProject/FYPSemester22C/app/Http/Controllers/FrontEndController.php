<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $categories = Category::where('category_status', 1)->get();
        $dishes = Menu::where('dish_status',1)->get();
        $cartItem=0;
        $cartItem = Cart::count('id');
       // $cart->count();
        return view('welcome', compact('categories','dishes','cartItem'));
    }

    public function dish_show($id){
        $categoryDish = Menu::where('category_id',$id)
        ->where('dish_status',1)
        ->get();
         $categories = Category::all();
         $cartItem=0;
        $cartItem = Cart::count('id');
        return view('menu', compact('categoryDish','categories','cartItem'));
    }
    //public function proceedOrder($id){
       // $dish = Cart::where('dish_id',$id)
        //->get();
        //return view('payment', compact('categoryDish'));
       // $CartDish = Cart::content();

        //return view('payment', compact('CartDish'));
    //}
}
