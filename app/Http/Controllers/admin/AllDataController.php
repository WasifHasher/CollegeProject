<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Models\slider;
use App\Models\product;
use App\Models\about;
use App\Models\CustomerOrder;
use App\Models\comment;
use App\Models\category;
use App\Models\owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class AllDataController
{
    
    public function dashboard(){
        $current_month_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->month)->count();
        $current_1_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(1))->count();
        $current_2_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(2))->count();
        $current_3_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(3))->count();
        $current_4_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(4))->count();
        $current_5_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(5))->count();
        $current_6_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(6))->count();
        $current_7_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(7))->count();
        $current_8_order = CustomerOrder::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->subMonth(8))->count();
    


        $charts = array( $current_month_order, $current_1_order, $current_2_order, $current_3_order,
        $current_4_order,$current_5_order,$current_6_order,$current_7_order,$current_8_order);
    
    
        return view('admin.Home',compact('charts'));

        
    } 

    public function search(Request $req){
        $data = product::where('name','like','%' .$req->input('query').'%')->get();
         return view('admin.search',['products' => $data]);
     }
 
    public function showIndex(){

        $userid = Auth::id();
        $shows = slider::where('user_id',$userid)->with('user')->get();
        return view('admin.Slider',compact('shows'));
    }

    public function Status($id){
        $status = slider::find($id);

        if($status){
            if($status->status){
                $status->status = 0;
            }else{
                $status->status = 1;
            }
            $status->save();
        }
        return back();
    }

  /*****************************************************************************************************/
    public function SaveSlider(Request $req){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,webp'
        ]);

       // below we bring the Model file name as Slider
        $slider = new slider;
        $userid = Auth::id();

        $slider->title = $req->title;
        $slider->description = $req->description;
        $slider->user_id = $userid;

        if($req->hasfile('image')){
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' . $ext;
            $file->move('Products/',$filename);
            $slider->image = $filename;
        }
        $slider->save();
        return redirect('/mainslider')->with('status','Your data is Successfully Added.');
    }
/*****************************************************************************************************/
    public function ShowUpdatePage(int $id){
        $updates = slider::find($id);
        return view('admin.sliderEdit',compact('updates'));
    }
/*****************************************************************************************************/
    public function SaveUpdateSlider(Request $req, string $id){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,png,jpeg,webp'
        ]);

        $slider = slider::find($id);
        $slider->title = $req->title;
        $slider->description = $req->description;

        if($req->hasfile('image')){
            $destination = 'Products/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' . $ext;
            $file->move('Products/',$filename);
            $slider->image = $filename; 
        }
        $slider->update();
        return redirect('/mainslider')->with('status','Your data is Successfully Updated.');
    }
   
/*****************************************************************************************************/
    public function DeleteSlider(string $id){
        $deleteSlider = slider::find($id);
        $image_path = public_path('Products/'.$deleteSlider->image);
        if(File_exists($image_path)){
            unlink($image_path);
        }
        $deleteSlider->delete();
        return redirect('/mainslider')->with('status','Your data is Successfully Deleted.');
    }

/*****************************************************************************************************/

    // Order Page All system 

/*****************************************************************************************************/


public function orderIndex(){

    $userid = Auth::id();
    $orders = product::where('user_id',$userid)->with(['user','Newfunction'])->paginate(6);
 
    return view('admin.OrderSave',compact('orders'));
}
/*****************************************************************************************************/
public function StoreOrder(Request $req){
    $req->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,webp',
        'desc' => 'required'
    ]);
    $order = new product;
    $userid = Auth::id();
    $order->name = $req->name;
    $order->price = $req->price;
    $order->desc = $req->desc;
    $order->categoryname = $req->category;
    $order->user_id = $userid;
    
    if($req->hasfile('image')){
        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time(). '.' . $ext;
        $file->move('Products/',$filename);
        $order->image = $filename;
    }
    $order->save();
    return redirect('/mainOrder')->with('status','Your Data is Successfully Added.');
}
/*****************************************************************************************************/
public function showUpdateOrderPage(string $id){
    $updateOrders = product::find($id);
    return view('admin.OrderEditPage',compact('updateOrders'));
}
/*****************************************************************************************************/
public function UpdateOrder(Request $req, string $id){
    $req->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'mimes:jpg,png,jpeg,webp',
        'desc' => 'required'
    ]);

    $order = product::find($id);
    $order->name = $req->name;
    $order->price = $req->price;
    $order->desc = $req->desc;
    $order->categoryname = $req->category;
    if($req->hasfile('image')){
        $destination = 'Products/'.$order->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time(). '.' . $ext;
        $file->move('Products/',$filename);
        $order->image = $filename;
    }
    $order->save();
    return redirect('/mainOrder')->with('status','Your Data is Successfully Updated.');
}
/*****************************************************************************************************/
public function deleteOrder(string $id){
    $deleteOrder = product::find($id);
    $image_path = public_path('Products/'.$deleteOrder->image);
    if(File_exists($image_path)){
        unlink($image_path);
    }
    $deleteOrder->delete();
    return redirect('/mainOrder')->with('status','Your Data is Successfully Delete.');

}
/*****************************************************************************************************/

/*****************************************************************************************************/

    // About Page All system 

/*****************************************************************************************************/

public function aboutIndex(){

    $userid = Auth::id();

    $abouts = about::where('user_id',$userid)->with('user')->get();
   return view('admin.about',compact('abouts'));
}

public function StoreAbout(Request $req){

    $req->validate([
        'aboutTitle' => 'required',
        'aboutDesc' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,webp',
        
    ]);

    $about = new about;

    $userid = Auth::id();

    $about->aboutTitle = $req->aboutTitle;
    $about->aboutDesc = $req->aboutDesc;
    $about->user_id = $userid;

    if($req->hasfile('image')){

        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time(). '.' .$ext;
        $file->move('Products/',$filename);
        $about->image = $filename;

    }
    $about->save();
    
     return redirect('/mainAbout');

}

public function AboutShowPage(string $id){
    $aboutfinds = about::find($id);
    return view('admin.aboutEdit',compact('aboutfinds'));
}

public function UpdateAboutData(Request $req, string $id){


    $req->validate([
        'aboutTitle' => 'required',
        'aboutDesc' => 'required',
        'image' => 'mimes:jpg,png,jpeg,webp'
    ]);

    $about = about::find($id);

    $about->aboutTitle = $req->aboutTitle;
    $about->aboutDesc = $req->aboutDesc;

    if($req->hasfile('image')){

        $destination = 'Products/'.$about->image;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time(). '.' .$ext;
        $file->move('Products/',$filename);
        $about->image = $filename;

    }
    $about->update();
    
     return redirect('/mainAbout')->with('status','Your Data is Successfully Updated.');
}

public function deleteAbout(string $id){
    $deleteAbout = about::find($id);
    $image_path = public_path('Products/'.$deleteAbout->image);
    if(file_exists($image_path)){
        unlink($image_path);
    }
    $deleteAbout->delete();
    return redirect('/mainAbout')->with('status','Your Data is Successfully Deleted.');
}



public function ShowAllcomments(){
   
    $comments = comment::get();
    return view('admin.CommentPage',compact('comments'));
}


public function DeleteComment(int $id){

    $deletecomment = comment::find($id);
    $deletecomment->delete();
    return redirect('/ShowComments')->with('status','Your Data is Successfully Deleted.');

}


public function RecievedOrder(){

    $today = "All Data";
    $user_id = Auth::id();
    $received_orders = CustomerOrder::orderBy('id', 'desc')->get();
    $showOrder = CustomerOrder::where('user_id',$user_id)->count();
    $total = $received_orders->count();
    $this->price = $received_orders->sum(function ($order) {
        return $order->price * $order->qty; // Ensure 'price' and 'qty' exist in your database
    });
    return view('admin.RecievedOrder',compact('received_orders','total','today'))->with('price',$this->price);
}

public function deleteRecOrd(int $id){

    $delete_order = CustomerOrder::find($id);
    $delete_order->delete();
    return redirect('/RecievedOrder')->with('status','Your Order is Successfully Deleted.');

}

// This section we making for Owner information
  
public function show_owner_data() {
    $ownerdata = owner::get(); // Fetches all data from the 'owners' table
    return view('admin.owner', compact('ownerdata')); // Passes data to the view
}

public function Add_owner_record(Request $req){

    $req->validate([
        'heading' => 'required',
        'info' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,webp',
        
    ]);

    $owner = new owner;

    $userid = Auth::id();

    $owner->heading = $req->heading;
    $owner->info = $req->info;
    $owner->user_id = $userid;

    if($req->hasfile('image')){

        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time(). '.' .$ext;
        $file->move('Products/',$filename);
        $owner->image = $filename;

    }
    $owner->save();
    
     return redirect('/owner');

    
}

 public function Show_update_Owner_page_Record(string $id){
    $show_update_record = owner::find($id);
    return view('admin.Owner_Update_Page',compact('show_update_record'));
 }

 public function Save_update_Record_on_Database(Request $req, string $id) {
    // Validate the request
    $req->validate([
        'heading' => 'required|string|max:255',
        'info' => 'required|string',
        'image' => 'nullable|mimes:jpg,png,jpeg,webp|max:2048', // Make image optional
    ]);

    // Fetch the existing owner record or fail
    $owner = Owner::findOrFail($id);

    // Retrieve the logged-in user's ID
    $userid = Auth::id();

    // Update owner fields
    $owner->heading = $req->heading;
    $owner->info = $req->info;
    $owner->user_id = $userid;

    // Check if an image is uploaded
    if ($req->hasFile('image')) {
        // Delete the old image if it exists
        if ($owner->image && file_exists(public_path('Products/' . $owner->image))) {
            unlink(public_path('Products/' . $owner->image));
        }

        // Process the new image
        $file = $req->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('Products/'), $filename);
        $owner->image = $filename;
    }

    // Save the updated record to the database
    $owner->save();

    // Redirect back with a success message
    return redirect('/owner')->with('success', 'Record updated successfully!');
}

public function Delete_Owner_Record(string $id){

    $deleteAbout = owner::find($id);
    $image_path = public_path('Products/'.$deleteAbout->image);
    if(file_exists($image_path)){
        unlink($image_path);
    }
    $deleteAbout->delete();
    return redirect('/owner')->with('status','Your Data is Successfully Deleted.');

}




}
