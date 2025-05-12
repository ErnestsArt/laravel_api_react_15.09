<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() {
        $product = Products::all();
        return view('products.index', ['products' => $product]);
    }
    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {
        Products::create([
            'name' => $request['name'],
            'quantity' => $request['quantity']
        ]);
        return redirect('/product');
    }
}
