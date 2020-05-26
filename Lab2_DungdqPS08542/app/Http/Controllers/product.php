<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class product extends Controller
{
    function index()
    {
        $listProduct=Products::all();
        return view('product.products',['product'=>$listProduct]);
    }

    function delail($id)
    {
        $productdetail=Products::where('productId',$id)->get();
        return view('product.productdetail',['productdetail'=>$productdetail[0]]);
    }
}
