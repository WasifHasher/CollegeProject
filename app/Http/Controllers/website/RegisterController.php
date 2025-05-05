<?php

namespace App\Http\Controllers\website;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class RegisterController
{

    public function WebsiteRegistertion(){
        return view('Register');
    }

    public $users;

    public function Register(Request $req){

      $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
        ]);

        $users = user::create($data);

        if($users){
            Mail::to($users->email)->send(new WelcomeEmail($users));
            //return redirect("/WebsiteLogin")->with('status','You are Registered Successfully.');
            return view('NotAllowedPage');
        }


    }


    // here we created verification for user
    public function verifyEmail($id)
{
    $user = User::findOrFail($id);

    // Check if already verified
    if ($user->email_verified_at) {
        return back()->with('message', 'Email already verified!');
    }

    // Mark email as verified
    $user->email_verified_at = now();
    $user->save();

    return redirect("/WebsiteLogin")->with('status', 'You are Registered Successfully.');
}


// Below we make the Login section for the authentication 

    public function showLogin(){
        return view('Login');
    }
    public function Login(Request $req)
    {
        // Validate the request input
        $credential = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // Check if the remember me checkbox is checked
        $remember = $req->has('remember');
    
        // Attempt to authenticate the user
        if (Auth::attempt($credential, $remember)) {
            return redirect('/'); // Redirect to the homepage or intended page
        } else {
            return redirect('/WebsiteLogin')->with('status', 'Please check your username and password');
        }
    }
    


    public function Logout(){
        Auth::Logout();
        return view('Login');
    }

    public function authenticated(){
        \Auth::logoutOtherDevices(request('password'));
    }
   


    // public function editprofileData($id){

    //     $showCurrentUserData = User::find($id);

    //     return view('home',compact('showCurrentUserData'));

    // }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('ProfileUpdatePage', compact('user')); // return only form view
    }
    
    
    
    public function SaveProfileData(Request $request, $id)
    {
        // Validate input (optional but recommended)
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
        ]);
    
        // Find user and update
        $user = User::findOrFail($id);
        $user->name  = $request->name;
        $user->email = $request->email;
    
        $user->save();
    
        return redirect('/')->with('status', 'Profile updated successfully!');
    }
    


   
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();

    }
    


    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
    
            $findUser = User::where('email', $user->email)->first();
    
            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = bcrypt('12345demo');
                $findUser->email_verified_at = now();
                $findUser->usertype = 'user';
                $findUser->save();
            }
    
            // Log the user in
            Auth::login($findUser);
    
            return redirect('/'); // redirect to home or dashboard
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    

protected function authenticate(Request $request, $user)
{
    session()->put('show_ad', true);
    return redirect()->intended('/');
}


}
