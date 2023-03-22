<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function index() {
return view('Dashboard.addCategory');
    }

    public function save( Request $request) {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->category_status = $request->category_status;
        $category->added_on = $request->added_on;
        $category->save();

           return back()->with('sms','Category Saved');
    }

    public function manage(){
        $categories = Category::all();

        return view('Dashboard.manageCategory', compact('categories'));
    }
    public function active($category_id){
        $category = Category::find($category_id);
        $category->category_status = 1;
        $category->save();
        return back();
    }
    public function Inactive($category_id){
        $category = Category::find($category_id);
        $category->category_status = 0;
        $category->save();
        return back();
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        return back();
    }
    public function update(Request $request){
    $category = Category::find($request->category_id);
$category->category_name = $request->category_name;
$category->order_number = $request->order_number;
$category->save();
return redirect('/category/manage')->with('sms', 'Category updated');
    }
}
