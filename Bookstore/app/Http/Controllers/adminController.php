<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class adminController extends Controller
{
    function index()
    {
        return view('admin.main');
    }

    function dashboard(){
        return view('admin.index');
    }
}
