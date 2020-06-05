<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class productController extends Controller
{
    function index()
    {
        $products=product::all();
        $catalogs=catalog::all();
        return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs]);
    }

    function detail($id)
    {
        return 'heheh';
        // $products=product::all();
        // $catalogs=catalog::all();
        // return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs]);
    }
}
