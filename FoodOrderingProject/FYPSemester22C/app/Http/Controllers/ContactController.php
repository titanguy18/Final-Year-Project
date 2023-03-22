<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function add(){
        $r=request();
        $addContact=Contact::create([
            'fName' => $r -> fName,
            'lName' => $r -> lName,
            'email' => $r -> email,
            'message' => $r -> message,
        ]);
        return view('contact');
        }
}