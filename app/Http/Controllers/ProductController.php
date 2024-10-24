<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function create() {
        return view('product/create');
    }

    public function store(Request $request) {
        $imageName = $request->file('image')->store('', 'media_uploads');
            $request->file('image')->store('', 'media_uploads');

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->rarity = $request->rarity;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->imageUrl = "/media/uploads/$imageName";
        $product->save();

        return redirect(to: '/products');
    }

    public function edit() {

    }

    public function update(Request $request) {

    }

    public function delete(int $id) {
        
    }
}
