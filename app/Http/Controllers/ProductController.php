<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('/product/index')
            ->with('products', $products);
    }

    public function show(int $id) {
    
        return view('/product/show')
            ->with('product', Product::findOrFail($id));
    }
}
