<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if (Auth::attempt(['username' => $request['email'], 'password' => $request['password'], 'rule' => 1])) {
            if (Auth::check()) {
                session(['admin'=>Auth::user()]);
                return view('admin.index');
            } else {
                return redirect('admin/login');
            }
        }
    }
}
