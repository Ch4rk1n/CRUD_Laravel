<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

use App\Models\Models\ModelProduct as ModelsModelProduct;
use App\Models\User as ModelsUser;


class ProductController extends Controller
{
    private $objUser;
    private $objProduct;
    public function __construct()
    {
        $this->objUser = new ModelsUser();
        $this->objProduct = new ModelsModelProduct() ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->objProduct->all();  
        $users=$this->objUser->all();
        return view('index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('cadastroProduto',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->objProduct->create([
            'produto'=>$request->produto,
            'preco'=>$request->preco,
            'id_user'=>$request->id_user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = $this->objProduct->find($id);  
        return view('cadastroProduto',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=$this->objProduct->find($id);
        $users=$this->objUser->all();
        return view('cadastroProduto',compact('products','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $this->objProduct->where(['id'=>$id])->update([
            'produto'=>$request->produto,
            'preco'=>$request->preco,
            'id_user'=>$request->id_user
        ]);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objProduct->destroy($id);
        return($del)?"sim":"não";
    }
}
