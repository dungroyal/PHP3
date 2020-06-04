<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layout extends Controller
{
    function index()
    {
        return view('layouts/layout0');
    }
}
