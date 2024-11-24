<?php

namespace App\Http\Controllers\bankend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    // public function index(){
    //     return view('bankend.master');
    // }
    // public function singin(){
    //      return view('bankend.master-login-register');
    // }
  
    function register(){
        return view('bankend.register');
    }
    public function register_submit( Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
         if($user){
            return redirect()->route('login');
         }

    }
    public function login(){
        return view('bankend.login');
    }
    public function login_submit(Request $request){
        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('dashbord');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function dashbord(){
        return view('bankend.master');
    }

}   
