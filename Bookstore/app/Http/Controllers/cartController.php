<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;
use App\order;

class cartController extends Controller
{
    
    function __construct()
    {
        $this->catalogs=catalog::all();
    }
    function addToCart($idProduct)
    {
        $product = product::where('idProduct','=', $idProduct)->first();
        $cart = session()->get('carts');
        if (!$cart) {
            $cart=[
                $idProduct=>[
                "idProduct"=>$idProduct,
                "authorProduct"=> $product->authorProduct,
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
                "idProduct"=>$idProduct,
                "authorProduct"=> $product->authorProduct,
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

    public function detete_item_cart($id)
    {
        $cart = session('carts');
        unset($cart[$id]);
        session()->put('carts',$cart);
        return redirect()->back();
    }

    public function checkout()
    {
        return view('home.checkout',['list_catalog'=>$this->catalogs]);
    }

    public function checkout_submit(Request $request)
    {
        $customer = session('user');
        $cart = session('carts');
        
        foreach ($cart as $item){
            $data=array(
            'idUser'=>$customer['id'],
            'idProduct'=>$item['idProduct'],
            'quantity'=>$item['quantity'],
            'status'=>1,
            );
        order::create($data);
        }
        session()->forget('carts');
        return redirect('/');
    }

}
