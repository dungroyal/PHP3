<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function login()
    {
        return view('admin.login');
    }

    function checklogin(Request $request)
    {
        $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);

        $data=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        
    }
}
