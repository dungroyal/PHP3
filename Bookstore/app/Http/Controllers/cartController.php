<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class cartController extends Controller
{
    function addToCart($idProduct)
    {
        $product = product::where('idProduct','=', $idProduct)->first();
        $cart = session()->get('carts');
        if (!$cart) {
            $cart=[
                $idProduct=>[
                "nameProduct"=> $product->nameProduct,
                "quantity"=> 1,
                "priceProduct"=> $product->priceProduct,
                "images"=> $product->images
                ]
            ];
            session()->put('carts',$cart);
        } elseif(isset($cart[$idProduct])){
            $cart[$idProduct]['quantity']++;
            session()->put('carts',$cart);
        }else{ 
            $cart[$idProduct]=[
                "nameProduct"=> $product->nameProduct,
                "quantity"=> 1,
                "priceProduct"=> $product->priceProduct,
                "images"=> $product->images
            ];
            session()->put('carts',$cart);
        }
        // return session('carts');
        return redirect()->back();
    }

}
