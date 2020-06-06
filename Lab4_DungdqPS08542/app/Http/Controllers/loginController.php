<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;

class loginController extends Controller
{
    function index()
    {
        return view('login');
    }
      
    function login(Request $request)
    {
        //Validation
        $request->validate([
            'username'=>['required'],
            'password'=>['required']
         ]);
        return 'Đăng nhập thành công';
    }

}
