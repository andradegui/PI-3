<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){

        return view('product.index')->with('products', Product::all());

    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request){

       $product = Product::create($request->all());
       session()->flash('success', 'O produto foi criado com sucesso');
       return redirect(route('product.index'));


    }

    public function edit(Product $product){

        return view('product.edit')->with('product', $product);

    }

    public function update(Product $product, Request $request){

        $product->update($request->all());
        session()->flash('success', 'O produto foi alterado');
        return redirect(route('product.index', $product->id));
    }

    public function destroy(Product $product){

        $product->delete();
        session()->flash('success', 'O produto foi apagado');
        return redirect(route('product.index'));
    }
}

