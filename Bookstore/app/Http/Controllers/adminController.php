<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;
use App\product;
use App\catalog;

class adminController extends Controller
{
    function __construct()
    {
        $this->catalogs=catalog::all();
    }

    function dashboard()
    {
        if (session('admin')) {
            return view('admin.index');
        }else{
            return redirect('/admin123');
        }
    }

    function product()
    {
        $products=product::paginate(5);
        return view('admin.product.product',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

    
    function creat_product()
    {
        $products=product::paginate(8);
        return view('admin.product.create_product',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

    function create_product_submit(Request $request)
    {
        //Upload image
        $file = $request->image;
        $file->move('images', $file->getClientOriginalName());
        // Get DATA
        $data=array(
            'nameProduct'=>$request->nameProduct,
            'NXB'=>$request->NXB,
            'images'=>$file->getClientOriginalName(),
            'Description'=>$request->Description,
            'priceProduct'=>$request->priceProduct,
            'specialPrice'=>$request->specialPrice,
            'authorProduct'=>$request->authorProduct,
            'status'=>$request->status,
            'idCategory'=>$request->idCategory,
        );
        product::create($data);
        return redirect()->Route('admin-product');
    }

    function update_product_submit(Request $request,$id)
    {
        $file = $request->image;
        $file->move('images', $file->getClientOriginalName());
        $data=array(
            'nameProduct'=>$request->nameProduct,
            'NXB'=>$request->NXB,
            'images'=>$file->getClientOriginalName(),
            'Description'=>$request->Description,
            'priceProduct'=>$request->priceProduct,
            'specialPrice'=>$request->specialPrice,
            'authorProduct'=>$request->authorProduct,
            'status'=>$request->status,
            'idCategory'=>$request->idCategory,
        );
        product::where('idProduct',$id)->update($data);
        return redirect()->Route('admin-product');
    }

    function del_product_submit($id)
    {
        product::where('idProduct',$id)->delete($id);
        return redirect()->Route('admin-product');
    }

    function update_product($id)
    {
        $products=product::where('idProduct',$id)->get();
        return view('admin.product.update_product',['product'=>$products[0],'list_catalog'=>$this->catalogs]);
    }

    function catalogs()
    {
        return view('admin.catalog.catalogs',['list_catalog'=>$this->catalogs]);
    }

    function order()
    {
        $products=product::paginate(8);
        return view('admin.order',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

    function user()
    {
        $products=product::paginate(8);
        return view('admin.user',['list_products'=>$products,'list_catalog'=>$this->catalogs]);
    }

}
