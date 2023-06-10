<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('login.index');
    }

    public function loginLogic(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        //Kalau data user ada di database bakal redirect ke homepageuser
        if(Auth::attempt($credentials)){
            return redirect()->route('HomepageUser');
        }
        //ini kalau data user tidak ada didalam database
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('LoginAccount');
    }
}
