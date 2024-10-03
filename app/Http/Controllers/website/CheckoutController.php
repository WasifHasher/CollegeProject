<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\order;
use Config;
class CheckoutController
{
    // public function showPaymentPage(){
    //     $userid = Auth::id();
    //     $products = cart::where('user_id',$userid)->get();
    //     return view('Checkout',compact('products'));
    // }
    

    public function Docheckout(Request $request){

        $request->validate([
            'fullname' => 'required',
            'email'    => 'required|nullable',
            'city'     => 'required',
            'phone'    => 'required',
            'status'   => 'required',
            'address'  => 'required'
        ]);


        $data = $request->input();
        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";


        // $id = $data['id'];
        // $product = order::where('id','=',$id)->get();

        
        

        $storePrice =Session::get('total');

                       // $product[0]->price*100;
        $temp_amount = $storePrice;
        $amount_array = explode('.',$temp_amount);
        $pp_amount = $amount_array[0];

        $DateTime = new \DateTime();
        $pp_TxnDateTime = $DateTime->format('YmdHis');

        $ExpirtyDateTime = $DateTime;
        $ExpirtyDateTime->modify('+'. 1 .'hours');
        $pp_TxnExpiryDateTime = $ExpirtyDateTime->format('YmdHis');


        $pp_TxnRefNo = 'T'.$pp_TxnDateTime;



        $post_data = array(
            
                "pp_Version"                  => Config::get('constants.jazzcash.VERSION'),
                "pp_TxnType"                  => "MWALLET",
                "pp_Language"                 => Config::get('constants.jazzcash.LANGUAGE'),
                "pp_MerchantID"               => Config::get('constants.jazzcash.MERCHANT_ID'),
                "pp_SubMerchantID"            => "",
                "pp_Password"                 => Config::get('constants.jazzcash.PASSWORD'),
                "pp_BankID"                   => "TBANK",
                "pp_ProductID"                => "RETL",
                "pp_TxnRefNo"                 => $pp_TxnRefNo,
                "pp_Amount"                   => $pp_amount,
                "pp_TxnCurrency"              => Config::get('constants.jazzcash.CURRENCY_CODE'),
                "pp_TxnDateTime"              => $pp_TxnDateTime,
                "pp_BillReference"            => "billRef",
                "pp_Description"              => "Description of transaction",
                "pp_TxnExpiryDateTime"        => $pp_TxnExpiryDateTime,
                "pp_ReturnURL"                => '',
                "pp_SecureHash"               =>"",
                "ppmpf_1"                     => "",
                "ppmpf_2"                     => "",
                "ppmpf_3"                     => "",
                "ppmpf_4"                     => "",
                "ppmpf_5"                     => ""
           
        );

        $pp_SecureHash = $this->get_SecureHash($post_data);

        $post_data['pp_SecureHash'] = $pp_SecureHash;

        Session::put('post_data',$post_data);
        // echo "<pre>";
        // print_r($post_data);
        // echo "</pre>";


        $userid = Auth::id();
        $product = cart::where('user_id',$userid)->get();

        foreach($product as $cart){

        

        $order = new order;

        $order->name = $request->fullname;
        $order->email = $request->email;
        $order->city =  $request->city;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->status = $request->status;
        $order->pp_TxnRefNo = $pp_TxnRefNo;
        $order->product_name = $cart['name'];
        $order->price = $cart['price'];
        $order->qty = $cart['Quantity'];
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];

        $order->save();

        }

        cart::where('user_id',$userid)->delete();
    
        return view('doCheckoutPagetoJazzcash');
            
    }

    private function get_SecureHash($data_array){

        ksort($data_array);
        $str = '';

        foreach($data_array as $value){
            if(!empty($value)){
                $str = $str . '&' . $value;
            }
        }

        $str = Config::get('constants.jazzcash.INTEGERITY_SALT').$str;

        $pp_SecureHash = hash_hmac('sha256', $str, Config::get('constants.jazzcash.INTEGERITY_SALT'));

        return $pp_SecureHash;
     }


 

     public function deleteItem(string $id){

        $deleteItem = cart::find($id);
        $image_path = public_path('Products/'.$deleteItem->image);

        if(File_exists($image_path)){
            unlink($image_path);
        }
        $deleteItem->delete();

        return redirect('/CheckoutPage')->with('status','Your are item is deleted');

     }


    
}
