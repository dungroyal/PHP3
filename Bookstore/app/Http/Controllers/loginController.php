<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;

class loginController extends Controller
{
    
    function index(Request $request)
    {
        return view('login');
    }

}
