<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Unit;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        //return dd($products);
        return view('product.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $unit_list = $units->pluck('unit_name','id');
        $categories = Category::all();
        $category_list = $categories->pluck('category_name','id');
        return view ('product.create',compact('category_list','unit_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->unit_id = $request->unit_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('product')->with('sukses','Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p=Product::find($id);
        return dd($p->category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $units = Unit::all();
        $unit_list = $units->pluck('unit_name','id');
        $categories = Category::all();
        $product = Product::find($id);
        $category_list = $categories->pluck('category_name','id');
        return view ('product.edit',compact('category_list','unit_list','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->unit_id = $request->unit_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('product')->with('sukses','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product')->with('sukses','Product has been deleted');
    }
}
