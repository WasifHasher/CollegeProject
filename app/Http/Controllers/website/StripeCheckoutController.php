<?php
      
namespace App\Http\Controllers\website;
       
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\order;
use App\Models\customerOrder;

       
class StripeCheckoutController
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(int $total): View
    {
        return view('stripePage',compact('total'));
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request, int $total): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => $total * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from wasifhasher@gmail.com" 
        ]);


        $userid = Auth::id();
        $product = cart::where('user_id',$userid)->get();

        $name = $request->input('Cus_name');
        $email = $request->input('Cus_email');
        $city = $request->input('Cus_city');
        $phone = $request->input('Cus_phone');
        $status = $request->input('Cus_status');
        $address = $request->input('Cus_address');


      foreach($product as $cart){

        $Save = new customerOrder;

        $Save->name = $name;
        $Save->email = $email;
        $Save->city = $city;
        $Save->phone = $phone;
        $Save->status = $status;
        $Save->address = $address;
        $Save->product_name = $cart['name'];
        $Save->price = $cart['price'];
        $Save->qty = $cart['Quantity'];
        $Save->product_id = $cart['product_id'];
        $Save->user_id = $cart['user_id'];

        $Save->save();



      }

       

        

        cart::where('user_id',$userid)->delete();
                
        return redirect('/successpage')
                ->with('success', 'Payment successful!');
    }


    public function showPaymentPage(){
        $userid = Auth::id();
        $products = cart::where('user_id',$userid)->get();
        return view('StripeCheckoutPage',compact('products'));
    }

 

    public function SaveData(Request $request){


      $userid = Auth::id();
      $product = cart::where('user_id',$userid)->get();
     

    foreach($product as $cart){

      $order = new customerOrder;

      $order->name = $request->Cus_name;
      $order->email = $request->Cus_email;
      $order->city = $request->Cus_city;
      $order->phone = $request->Cus_phone;
      $order->status = $request->Cus_status;
      $order->address = $request->Cus_address;
      $order->product_name = $cart['name'];
      $order->price = $cart['price'];
      $order->qty = $cart['Quantity'];
      $order->product_id = $cart['product_id'];
      $order->user_id = $cart['user_id'];

      $order->save();



    }

     

      

      cart::where('user_id',$userid)->delete();



    }



}