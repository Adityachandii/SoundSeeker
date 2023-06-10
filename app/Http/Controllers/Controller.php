<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function homeuser(){
    //     return view('user.homeuser');
    // }

    // public function homeguest(){
    //     return view('user.homeguest');
    // }

    public function register(){
        return view('register.register');
    }
}
