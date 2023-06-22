<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin',['except' => ['logout']]);
    }
    public function showAdminLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //Validate
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:10'
        ]);
        
        //Attempt to login
        if(Auth::guard('admin')->attempt(['email' => $request->email,  'password' => $request->password], $request->remember)){
        //if successful, go to the intended page
        return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessful, then automatically fill the DATA
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
