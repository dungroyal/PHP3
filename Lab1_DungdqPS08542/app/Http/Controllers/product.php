<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    function index()
    {
        return view('product.products');
    }

    function delail()
    {
        return view('product.productdetail');
    }
}
