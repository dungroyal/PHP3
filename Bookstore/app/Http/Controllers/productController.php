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
        $catalogs=catalog::all();
        $products=product::where('idProduct',$id)->get();
        return view('home.productdetail',['product'=>$products[0],'list_catalog'=>$catalogs]);
    }

    function product_by_id($id)
    {
        $catalogs=catalog::all();
        $products=product::where('idCategory',$id)->get();
        $infoC=catalog::where('idCategory',$id)->get();
        return view('home.product',['list_products'=>$products,'list_catalog'=>$catalogs,'nameCategory'=>$infoC[0]]);
    }
}
