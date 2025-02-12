<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($id)
    {
        $product = Product::find($id);
        return view('product',[
            'product' => $product
        ]);
    }
}
