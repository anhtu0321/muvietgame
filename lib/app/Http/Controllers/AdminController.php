<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }else{
            return view('backend.login');
        }
 
    }
    public function postLogin(Request $request){
        $user_check = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if(Auth::attempt($user_check)){
            return redirect()->route('home');
        }else{
            return redirect()->route('admin.login');
        }
    }
    public function getLogout(){
        if(Auth::logout()){
            return redirect()->route('home');
        }
    }
}
