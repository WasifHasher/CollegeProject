<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Models\slider;
use App\Models\product;
use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AllDataController
{
    
    public function dashboard(){
        return view('admin.Home');
    } 

    public function search(Request $req){
        $data = product::where('name','like','%' .$req->input('query').'%')->get();
         return view('admin.search',['products' => $data]);
     }
 
    //  public function aboutSearch(Request $req){
    //     $abouts = about::where('aboutTitle','like','%' .$req->input('query').'%')->get();
    //     return view('admin.aboutSearch',['aboutSearchs' => $abouts]);
    //  }


    public function showIndex(){

        $userid = Auth::id();
       
        $shows = slider::where('user_id',$userid)->with('user')->get();
        return view('admin.Slider',compact('shows'));
    }
  /*****************************************************************************************************/
    public function SaveSlider(Request $req){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,webp'
        ]);
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
    $orders = product::where('user_id',$userid)->with('user')->get();
    return view('admin.OrderSave',compact('orders'));
}
/*****************************************************************************************************/
public function StoreOrder(Request $req){
    $req->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,webp'
    ]);
    $order = new product;
    $userid = Auth::id();
    $order->name = $req->name;
    $order->price = $req->price;
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
        'image' => 'mimes:jpg,png,jpeg,webp'
    ]);

    $order = product::find($id);
    $order->name = $req->name;
    $order->price = $req->price;
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







}
