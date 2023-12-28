<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('./products/index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('./products/create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect('/products');
    }
}
