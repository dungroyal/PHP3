<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
                return redirect('/admin123/Dashboard');
            }
        } else {
            return redirect('/admin123')->with('error-login-admin', 'Sai tên đăng nhập hoặc mật khẩu.');
        }
    }

    function logout()
    {
        session()->forget('admin');
        return redirect('/admin123');
    }
}
