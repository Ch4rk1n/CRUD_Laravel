<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function create()
    {
        $users = User::all();

        return view('cadastroProduto', compact('users'));
    }

    public function store(ProductRequest $request)
    {
        Product::create([
            'produto'=>$request->produto,
            'preco'=>$request->preco,
            'id_user'=>$request->id_user
        ]);
    }

    public function show($id)
    {
        $products = Product::find($id);

        return view('cadastroProduto', compact('products'));
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $users = User::all();

        return view('cadastroProduto', compact('products', 'users'));
    }

    public function update(ProductRequest $request, $id)
    {
        Product::where(['id' => $id])->update([
            'produto' => $request->produto,
            'preco' => $request->preco,
            'id_user' => $request->id_user
        ]);

        return redirect('products');
    }

    public function destroy($id)
    {
        return Product::destroy($id) ? "sim" : "não";
    }
}
