<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class homeController extends Controller
{
    function index()
    {
        $products=product::all();
        $catalogs=catalog::all();
        return view('home.index',['list_products'=>$products,'list_catalog'=>$catalogs]);
    }
}
