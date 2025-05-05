<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\product;
use App\Models\About;
use App\Models\Cart;
use App\Models\Rating;
use App\Models\owner;
use App\Models\comment;
use App\Models\category;
use App\Models\customerOrder;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class HomeController
{

    // Below we show the total record on header file which customer see all counted item
   
    public function header(){
    $user_id = Auth::id();
    $totalrecords = cart::where('user_id',$user_id)->count();
    return view('header',compact('totalrecords'));
    }



    public function home(){
        
    $gets = Slider::where('status',1)->get();
    $products = product::get()->take(12);
    $owner = owner::get();

    // $prod_id = product::select('id')->get();


    // $ratings = Rating::where('prod_id', $products->id)->get();
    // $rating_sum = Rating::where('prod_id', $products->id)->sum('rating');

    // if ($ratings->count() > 0) {
    //     $ratingvalue = $rating_sum / $ratings->count();
    // } else {
    //     $ratingvalue = 0; // No ratings available
    // }

    // return view('home',['gets' => $get],['products' =>$products],['ratingvalue' => $ratingvalue]);
    return view('home',compact('gets','products','owner'));
    }


    public function detailFunction(string $id){

           $details = product::find($id);
           // Fetch the product
            $ratings = Rating::where('prod_id', $details->id)->get();
            $rating_sum = Rating::where('prod_id', $details->id)->sum('rating');
        
            if ($ratings->count() > 0) {
                $ratingvalue = $rating_sum / $ratings->count();
            } else {
                $ratingvalue = 0; // No ratings available
            }
        
            return view('details', compact('details', 'ratingvalue'));
        
    
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

    public function search(Request $req)
    {
        // Validate the input
        $req->validate([
            'query' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);
        
        $category = $req->input('category');

        // Search products by name or price
        $search = Product::query()
            ->when($req->input('query'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('price', 'like', '%' . $search . '%');
                      
            })
            ->when($req->input('category'), function ($query, $search) {
                $query->where('category', 'like', '%' . $search . '%');
         
            })
            ->get();
    
    
        return view('searchItem', compact('search'));
    }


    public function categoryfunction(string $id){
        $categories = product::where('categoryname',$id)->get();
        return view('category', compact('categories'));
    
    }

    


    public function addtocart(Request $req){

        $req->validate([
            'qty' => 'required',
        ]);

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






public function saveRating(Request $req)
{
    // Get the authenticated user's ID
    $user_id = Auth::id();

    if (!$user_id) {
        return redirect()->back()->with('status', 'You need to be logged in to rate products.');
    }

    // Validate the incoming request data
    $req->validate([
        'pid' => 'required',
        'rate' => 'required|integer|min:1|max:5',
    ]);

    $product_id = $req->input('pid');
    $rating_value = $req->input('rate');

    // Check if the user has already rated this product
    $existingRating = Rating::where('user_id', $user_id)
                            ->where('prod_id', $product_id)
                            ->first();

    if ($existingRating) {
        // Update the existing rating
        $existingRating->rating = $rating_value;
        $existingRating->save();

        return redirect()->back()->with('status', 'Your review has been updated.');
    }

    // Create a new rating
    $rating = new Rating;
    $rating->user_id = $user_id;
    $rating->prod_id = $product_id;
    $rating->rating = $rating_value;
    $rating->save();

    return redirect()->back()->with('status', 'Your review has been added.');
}

   // In your controller
public function updateStatusField(Request $request, $id)
{
    $order = CustomerOrder::find($id);
    $order->status = $request->status;
    $order->save();

    return redirect()->back()->with('success', 'Order status updated!');
}



}
