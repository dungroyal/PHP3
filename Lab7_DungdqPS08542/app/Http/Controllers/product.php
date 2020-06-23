<?php

namespace App\Http\Controllers;
use App\products;

use Illuminate\Http\Request;

class product extends Controller
{
    public function getAllProduct()
    {
        $product= products::get();
        return response($product,200);
    }
}
