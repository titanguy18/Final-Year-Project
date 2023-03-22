<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    public function index(){
        $categories = Category::where('category_status', 1)->get();
        return view('Dashboard.addDish', compact('categories'));
    }

    public function save_dish(Request $request){
$imgName = $request->file('dish_image');
$image = $imgName->getClientOriginalName();
$directory = 'images/dish_img/'; //dish image
$imgUrl = time().'.'.$image;
$imgName->move($directory,$imgUrl);

        $dish = new Menu();
        $dish->dish_name = $request->dish_name;
        $dish->category_id = $request->category_id;
        $dish->dish_detail = $request->dish_detail;
        $dish->dish_image = $imgUrl;
        $dish->dish_status = $request->dish_status;
        $dish->price = $request->price;
        $dish->discount = $request->discount;
        $dish->added_on = $request->added_on;
        $dish->save();
        return back()->with('sms','Data Saved');
    }

    public function manage_dish(){
    $categories = Category::where('category_status', 1)->get();
        $dishes = DB::table('menus')
        ->join('categories','menus.category_id', '=', 'categories.category_id')
        ->select('menus.*', 'categories.category_name')
        ->get();
        return view('Dashboard.manageDish', compact('dishes','categories'));
    }

    public function inactive($dish_id){
        $dish = Menu::find($dish_id);
        $dish->dish_status = 0;
        $dish->save();
        return back();
    }

    public function active($dish_id){
$dish = Menu::find($dish_id);
        $dish->dish_status = 1;
        $dish->save();
        return back();
    }
    
    public function delete($dish_id){
$dish = Menu::find($dish_id);
        $dish->delete();
        return back();
    }

    public function dish_update(Request $request){
       $dish = Menu::find($request->dish_id);

       $img_main = $request->file('dish_image');
       if($img_main){
           $img_name = $img_main->getClientOriginalName();
           $directory = 'images/dish_img/';
           $imgUrl = time().'.'.$img_name;
           $img_main->move($directory,$imgUrl);

           $old_img = 'images/dish_img/'.$dish->dish_image;
           if(file_exists($old_img)){
            unlink($old_img);
           } 
           $dish->dish_name = $request->dish_name;
        $dish->category_id = $request->category_id;
        $dish->dish_detail = $request->dish_detail;
        $dish->dish_image = $imgUrl;
        $dish->price = $request->price;
        $dish->discount = $request->discount;
       }
        else {
        $dish->dish_name = $request->dish_name;
        $dish->category_id = $request->category_id;
        $dish->dish_detail = $request->dish_detail;
        $dish->price = $request->price;
        $dish->discount = $request->discount;
       }
       $dish->save();
       return back()->with('sms','Updated data Successfully');
    }
}


