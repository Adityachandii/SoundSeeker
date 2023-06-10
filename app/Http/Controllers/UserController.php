<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addAccount(Request $request){
        $request->validate([
            "username"=>"required|min:3",
            "dateofbirth" => "required|date",
            "phone"=>"required|max:10",
            "email"=>"required|email",
            "password"=>"required|min:6",
            "confirmpassword"=>"required|same:password|min:6"
        ]);

        $post = new User();
        $post->username = $request->username;
        $post->phone = $request->phone;
        $post->tanggallahir = $request->dateofbirth;
        $post->email = $request->email;
        $post->password = Hash::make($request->password);
        $post->confirmpassword = Hash::make($request->confirmpassword);
        $post->save();

        return redirect()->route('LoginAccount');
    }
}
