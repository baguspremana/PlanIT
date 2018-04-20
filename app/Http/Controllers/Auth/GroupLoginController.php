<?php

namespace App\Http\Controllers\Auth;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;

class GroupLoginController extends Controller
{
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest',['except' => ['logout']]);
    }
 
    //function to show admin login form
    public function showLoginForm() {
        return view('peserta.login');
    }
    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        //attempt to login the admins in
        if (Auth::attempt(["username"=>$request->username,"password"=>$request->password], false)){
            //if successful redirect to admin dashboard
            
            return redirect()->intended(route('dashboard.index'));
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('username'));
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect('/');
    }
}
