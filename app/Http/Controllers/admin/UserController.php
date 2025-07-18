<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail; 
use App\Mail\CustomMessageMail;
use Illuminate\Support\Facades\Hash;
class UserController
{

    public function index(){
        return view('admin/Register');
    }

    public function Register(Request $req){

      $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
        ]);

        $users = user::create($data);

        if($users){
            return redirect("/login")->with('status','You are Registered Successfully.');

        }
    }

// Below we make the Login section for the authentication 

    public function showLogin(){
        return view('admin/Login');
    }
    public function Login(Request $req){

        $credential = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            return redirect('/dashboard');
        }
        elseif(!Auth::attempt($credential)){

            return redirect('/login')->with('status','Please check your username and password.');
        }
        
        // else{
        //     return redirect('/login')->with('status','Please You are not allowed for this site.');
        // }
    }

    public function Logout(){
        Auth::Logout();
        return view('admin.Login');
    }

   public function sendBulkEmail(Request $request)
{
    $request->validate([
        'user_ids' => 'required|array',
        'message' => 'required|string',
    ]);

    $users = User::whereIn('id', $request->user_ids)->get();

    foreach ($users as $user) {
        Mail::to($user->email)->send(new CustomMessageMail($request->message));
    }

    return back()->with('success', 'Emails sent successfully!');
}
    
}
