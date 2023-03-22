<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function add(){
        $r=request(); 
       if($r->file('image')!==''){
       $image = $r ->file('image');   //get uploaded file from html 
        $image->move('image',$image->getClientOriginalName()); //image copy to folder
        $imageName=$image->getClientOriginalName();
        /*$file = $r->file('image');
            $extention = $file->getClientOriginalExtension();
            $imageName = time().'.'.$extention;
            $file->move('images', $imageName);*/
    }
    else {
        $imageName="";
    }
    $addProduct=Product::create([
        'name'=>$r->productName,
        'description'=>$r->description,
        'price'=>$r->price,
        'quantity'=>$r->quantity,
        'image'=>$imageName,
        'categoryID'=>$r->categoryID,
        ]);
    return view('addProduct');
    }

    public function view() {
        $viewAll=Product::all();
        return view('viewProduct')->with('products',$viewAll);
    }

    public function edit($id) {
        $product=Product::all()->where('id',$id);
        //select * from categories where id= '$id'
        return view('editProduct')->with('products', $product);
    }

    public function update(){
        $r=request(); //input value from edtiCategory
        $product=Product::find($r->id); //retrieve record from MySQL
        $product->name=$r->productName; //bind data record from mySQL
        $product->description=$r->description;
        $product->price=$r->price;
        $product->quantity=$r->quantity;

            if($r->file('image')!==''){
                $destination = 'images/'.$product->image;

                if(File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $file = $r->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $imageName = time().'.'.$extention;
                    $file->move('images', $imageName);
            }

            else{
                $imageName = "noimage.jpg";
            }
        
        $product->image = $imageName;
        //$product->categoryID=$r->categoryID;    
        $product->update();
        return redirect()->route('viewProduct');
    }


    public function delete($id){
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        return redirect()->route('viewProduct');
    }

    public function show() {
        $viewAll=Product::all();
        (new CartController)->cartItem();
        return view('showProduct')->with('products',$viewAll);
    }

    public function showDetail($id) {
        $viewAll=Product::all()->where('id',$id);
        //SQL select * from Products where id='$id'
        return view('showProductDetail')->with('products',$viewAll);
    }

    public function searchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $product=DB::table('products')->where('name','like','%'.$keyword.'%')->get();
        return view('showProduct')->with('products',$product);
    }

}
