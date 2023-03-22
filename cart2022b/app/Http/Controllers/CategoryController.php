<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function add(){
        $r=request();//get data from text input
        $addCategory=Category::create([
            'name'=>$r->catName
        ]);
        return view('addCategory');
    }

    public function view() {
        $viewAll=Category::all();
        return view('viewCategory')->with('categories',$viewAll);
    }

    public function delete($id){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        return redirect()->route('viewCategory');
    }

    public function edit($id){
        $category=Category::all()->where('id',$id);
        //select * from categories where id= '$id'
        Return view ('editCategory')->with('categories', $category); 
    }

    public function update(){
        $r=request();//get input value from editCategory
        $category=Category::find($r->catID);//retrieve record from MYSQL
        $category->name=$r->catName;//binding data record from MYSQL
        $category->save();
        //apply SQL: update categories set name='$catName' where id='$catID'
        return redirect()->route('viewCategory');
    }
}
