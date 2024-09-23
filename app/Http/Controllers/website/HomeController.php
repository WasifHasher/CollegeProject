<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\product;
use App\Models\About;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController
{

   

   public function home(){
    $get = Slider::all();
    $orders = product::get();
     
    return view('home',['gets' => $get],['orders' =>$orders]);
   }

   public function header(){
    $totalrecord = cart::get();
    return view('header',compact('totalrecord'));
   }



    public function orderPage(){
        $orderPage = product::get();
        return view('orderPage',compact('orderPage'));
        
    }

    public function aboutpage(){
        $abouts = about::get();
        return view('about',compact('abouts'));
    }

    public function contactPage(){
        return view('Contact');
    }

    public function search(Request $req){

        $search = product::where('name','like','%' .$req->input('query').'%')->get();

        return view('searchItem',compact('search'));

    }


    public function addtocart(Request $req){

        $cart = new cart;

        $userid = Auth::id();

        $cart->name = $req->name;
        $cart->price = $req->price;
        $cart->Quantity = $req->qty;
        $cart->product_id = $req->product_id;
        $cart->user_id = $userid;
        $cart->image = $req->image;

        $cart->save();

        return redirect('/')->with('status','Your items is added.');




    }





}
