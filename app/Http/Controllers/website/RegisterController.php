<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController
{

    public function WebsiteRegistertion(){
        return view('Register');
    }

    public function Register(Request $req){

      $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
        ]);

        $users = user::create($data);

        if($users){
            return redirect("/WebsiteLogin")->with('status','You are Registered Successfully.');

        }

    }

// Below we make the Login section for the authentication 

    public function showLogin(){
        return view('Login');
    }
    public function Login(Request $req){

        $credential = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            return redirect('/');
        }

    }


    public function Logout(){
        Auth::Logout();
        return view('Login');
    }

   
    
}
