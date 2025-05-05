<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use Carbon\Carbon;
class administratorReportController
{
    
    public $price = 0;
    public function allData(){

        $today = "All Report";
        $received_orders = CustomerOrder::get();


        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });
    
        $total = $received_orders->count(); // Total number of orders
    

        return view('ReportPage', compact('received_orders', 'today', 'total'))->with('price', $this->price);


    }
      
    // ********************************************************************************************************************
    // ********************************* Below Section we make for the Today Record ********************************
    // ********************************************************************************************************************
    // Initialize the price property
    
    public function today()
    {
        $today = "Today Reports";
    
        // Fetch orders created today
        $received_orders = CustomerOrder::whereDate('created_at', Carbon::today())->orderBy('id', 'desc')->get();
    
        // Calculate the total price for all orders
        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });
    
        $total = $received_orders->count(); // Total number of orders
    
        // Pass the calculated data to the view
        return view('ReportPage', compact('received_orders', 'today', 'total'))->with('price', $this->price);
    }
    

    // ********************************************************************************************************************
    // ********************************* Below Section we make for the yesterday Record ********************************
    // ********************************************************************************************************************
    public function yesterday(){
        $today = "Yesterday Reports";
        $received_orders = CustomerOrder::whereDate('created_at',Carbon::yesterday())->orderBy('id', 'desc')->get();

        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });

        $total = $received_orders->count();
        return view('ReportPage',compact('received_orders','today','total'))->with('price',$this->price);
    }

    // ********************************************************************************************************************
    // ********************************* Below Section we make for the Last Week Record ********************************
    // ********************************************************************************************************************

    public function lastWeek(){
        $today = "Last Week Reports";
        $received_orders = CustomerOrder::whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->orderBy('id', 'desc')->get();

        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });
        
        $total = $received_orders->count();
        return view('ReportPage',compact('received_orders','today','total'))->with('price',$this->price);
    }
    

    // ********************************************************************************************************************
    // ********************************* Below Section we make for the Current Month Record ********************************
    // ********************************************************************************************************************
    public function CurrentMonth(){
        $today = "Current Month Reports";
        $received_orders = CustomerOrder::whereMonth('created_at',Carbon::now()->month)->orderBy('id', 'desc')->get();

        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });

        $total = $received_orders->count();
        return view('ReportPage',compact('received_orders','today','total'))->with('price',$this->price);
    }

    // ********************************************************************************************************************
    // ********************************* Below Section we make for the LastMonth Record ********************************
    // ********************************************************************************************************************

    public function LastMonth(){
        $today = "Last Month Reports";
        $received_orders = CustomerOrder::whereMonth('created_at',Carbon::now()->subMonth()->month)->orderBy('id', 'desc')->get();

        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });

        $total = $received_orders->count();
        return view('ReportPage',compact('received_orders','today','total'))->with('price',$this->price);
    }


    // ********************************************************************************************************************
    // ********************************* Below Section we make for the Current Year Record ********************************
    // ********************************************************************************************************************
    public function CurrentYear(){
        $today = "Current Year Reports";
        $received_orders = CustomerOrder::whereYear('created_at',Carbon::now()->year)->orderBy('id', 'desc')->get();

        $this->price = $received_orders->sum(function ($order) {
            return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
        });
        $total = $received_orders->count();
        return view('ReportPage',compact('received_orders','today','total'))->with('price',$this->price);
    }

    
     // ********************************************************************************************************************
    // *********************************************************************************************************************
    // ******************************************************************************************************************** //
    // ********************************* Below Section we make for the Brands ********************************
    // ******************************************************************************************************************** // 
    // *********************************************************************************************************************
    // ********************************************************************************************************************
    

    public function brand(string $id){

        $brands = CustomerOrder::where('product_id',$id)->get();
        $totalbrand = $brands->count();
        return view('ReportBrand',compact('brands','totalbrand'));
    }
        
    

}
