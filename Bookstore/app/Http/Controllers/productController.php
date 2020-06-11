<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class productController extends Controller
{
    function __construct()
    {
        $this->catalogs=catalog::all();
    }
    function index()
    {
        $products=product::paginate(8);
        return view('home.product',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

    function detail($id)
    {
        $products=product::where('idProduct',$id)->get();
        return view('home.productdetail',['product'=>$products[0],'list_catalog'=>$this->catalogs]);
    }

    function product_by_id($id)
    {
        $products=product::where('idCategory',$id)->paginate(4);
        $get_name_catalog=catalog::where('idCategory',$id)->get();
        return view('home.product',['list_products'=>$products,'list_catalog'=>$this->catalogs,'nameCategory'=>$get_name_catalog[0]]);
    }

    function search(Request $request)
    {
         $request->validate([
            'keyword'=>['required']
         ]);
         
        $keyword=$request->keyword;
        $products=product::where('nameProduct', 'LIKE', '%' . $keyword . '%')->paginate(4);

        return view('home.product',['list_products'=>$products,'list_catalog'=>$this->catalogs,'keyword'=>$keyword]);
        }

    function vote(Request $request,$id)
    {
        $request->validate([
        'fullName'=>['required'],
        'email'=>['required'],
        'comments'=>['required']
        ]);

        $fullName=$request->fullName;
        $email=$request->email;
        $comments=$request->comments;
        $vote=$request->vote;

        return $fullName.'<br>'.$email.'<br>'.$comments.'<br>'.$vote;
         
        // return redirect('/product/'.$id);
        }
}
