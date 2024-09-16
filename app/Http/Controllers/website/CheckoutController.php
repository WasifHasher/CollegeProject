<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\cart;
use Config;
class CheckoutController
{
    public function showPaymentPage(){
        $products = cart::get();
        return view('Checkout',compact('products'));
    }

    public function Docheckout(Request $request){

        $data = $request->input();
        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";


        $id = $data['id'];
        $product = order::where('id','=',$id)->get();

        $temp_amount = $product[0]->price*100;
        $amount_array = explode('.',$temp_amount);
        $pp_amount = $amount_array[0];

        $DateTime = new \DateTime();
        $pp_TxnDateTime = $DateTime->format('YmdHis');

        $ExpirtyDateTime = $DateTime;
        $ExpirtyDateTime->modify('+'. 1 .'hours');
        $pp_TxnExpiryDateTime = $ExpirtyDateTime->format('YmdHis');


        $pp_TxnRefNo = 'T'.$pp_TxnDateTime;



        $post_data = array(
            "pp_Version"                   => Config::get('constants.jazzcash.VERSION'),
            "pp_TxnType"                   => "MWALLET",
            "pp_Language"                  => Config::get('constants.jazzcash.LANGUAGE'),
            "pp_MerchantID"                => Config::get('constants.jazzcash.MERCHANT_ID'),
            "pp_SubMerchantID"             => "",
            "pp_Password"                  => Config::get('constants.jazzcash.PASSWORD'),
            "pp_BankID"                    => "TBANK",
            "pp_ProductID"                 => "RETL",
            "pp_TxnRefNo"                  => $pp_TxnRefNo,
            "pp_Amount"                    => $pp_amount,
            "pp_TxnCurrency"               => Config::get('constants.jazzcash.CURRENCY_CODE'),
            "pp_TxnDateTime"               => $pp_TxnDateTime,
            "pp_BillReference"             => "billRef",
            "pp_Description"               => "Description of transaction",
            "pp_TxnExpiryDateTime"         => $pp_TxnExpiryDateTime,
            "pp_ReturnURL"                 => Config::get('constants.jazzcash.RETURN_URL'),
            "pp_SecureHash" =>             "",
            "ppmpf_1"                      => "",
            "ppmpf_2"                      => "",
            "ppmpf_3"                      => "",
            "ppmpf_4"                      => "",
            "ppmpf_5"                      => ""
        );

        $pp_SecureHash = $this->get_SecureHash($post_data);

        $post_data['pp_SecureHash'] = $pp_SecureHash;

        Session::put('post_data',$post_data);
        echo "<pre>";
        print_r($post_data);
        echo "</pre>";
            
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

    
}
