<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;


class userController extends Controller
{
    public function show(){
        return view('userRegister'); //directly go to register page
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password =bcrypt($request->password);
        $customer->confirm_password = bcrypt($request->confirm_password);
        $customer->save();
  
        $customer_id = $customer->customer_id;
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer->name);
        return redirect('/');
        
        // return view('userLogin');
    }

    public function login(){
        return view('userLogin');
    }

    public function check(Request $request){
        $customer = Customer::where('email',$request->email)->first();
        if(password_verify($request->password, $customer->password)){
             Session::put('customer_id',$customer->customer_id);
             Session::put('customer_name',$customer->name);

             return view('welcome');
        } 
        else 
        {
             return redirect('userLogin')->with('sms', 'Your password is incorrect, Please provide us your correct password');
        }
    }

    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
     }

}

