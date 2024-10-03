<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\product;
use App\Models\About;
use App\Models\Cart;
use App\Models\comment;
use Illuminate\Http\Request;

class HomeController
{

    // Below we show the total record on header file which customer see all counted item
   
    public function header(){
    $user_id = Auth::id();
    $totalrecords = cart::where('user_id',$user_id)->count();
    return view('header',compact('totalrecords'));
    }



    public function home(){
    $get = Slider::all();
    $orders = product::get()->take(10);
    return view('home',['gets' => $get],['orders' =>$orders]);
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

public function SubmitComment(Request $req){

    $req->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required'
    ]);

    $save = new comment;

    $userId = Auth::id();

    $save->name = $req->name;
    $save->email = $req->email;
    $save->address = $req->address;
    $save->user_id = $userId;

    $save->save();

    return redirect('/contactPage')->with('status','Your message has been Sent.');




}



}
