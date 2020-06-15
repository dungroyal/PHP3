<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\product;
use App\catalog;

class homeController extends Controller
{
    function __construct()
    {
        $this->catalogs=catalog::all();
    }

    function index()
    {
        $products=product::paginate(4);
        return view('home.index',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

      
    function login(Request $request)
    {
        $request->validate([
            'username'=>['required'],
            'password'=>['required']
         ]);
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'rule' => 0])) {
            if (Auth::check()) {
                session(['user'=>Auth::user()]);
                return redirect()->back();
            }
        } else {
            return redirect('/')->with('error-login-user', 'Sai thông tin đăng nhập.');
            // return Hash::make('ps08542');
        }
    }

    function logout()
    {
        session()->forget('user');
        return redirect()->back();
    }


    function cart()
    {
        return view('home.cart',['list_catalog'=>$this->catalogs]);
    }
}
