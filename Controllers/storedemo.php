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
}
