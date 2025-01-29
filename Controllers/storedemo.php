<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storedemo extends Controller
{
    public function index(){
        return view('about');
    }
 
    public function contact(){
        return view('contact');
    }
    public function shop(){
        return view('shop');
    }
    public function checkout(){
        return view('checkout');
    }


    public function submitForm(Request $request)
    {
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $email=$request->input('email');
        $number=$request->input('number');
        $address=$request->input('address');
        $city=$request->input('city');
        $state=$request->input('state');
        $price=$request->input('price');
        $quantity=$request->input('quantity');
        //return redirect('/contact')->with('success','Message sent successfully!');
        return view ('checkoutsummary', compact('fname','lname','email','number','address','city','state','price','quantity'));
    }
}
