<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class homeController extends Controller
{
    function index()
    {
        $products=product::all();//tra ve tat ca tuyen bay
        return view('home.index',['list_products'=>$products]);
    }
}
