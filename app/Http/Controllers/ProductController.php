<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view('index', compact('products'));
        
    }

    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        $product= Product::find($id);
        return view('edit', compact('product'));
    }

//create
    public function store(Request $request){
        $product = new Product();
        $product->p_name = $request['p_name'];
        $product->p_code = $request['p_code'];
        $product->p_desc = $request['p_desc'];
        $product->p_category = $request['p_category'];
        $product->p_price = $request['p_price'];
        $product->p_quantity = $request['p_quantity'];
        $product->p_stock_date = $request['p_stock_date'];
        $product->p_rating = $request['p_rating'];
        $product->p_purchased = $request['p_purchased'];
        $product->save();
        return redirect::route('products.index');
    }

 //update

 public function update(Request $request,$id){
    $product = Product::find($id);
    $product->p_name = $request['p_name'];
    $product->p_code = $request['p_code'];
    $product->p_desc = $request['p_desc'];
    $product->p_category = $request['p_category'];
    $product->p_price = $request['p_price'];
    $product->p_quantity = $request['p_quantity'];
    $product->p_stock_date = $request['p_stock_date'];
    $product->p_rating = $request['p_rating'];
    $product->p_purchased = $request['p_purchased'];
    $product->save();
    return redirect::route('products.index');
}

 public function show($id)
 {
    $product= Product::find($id);
    return $product;    
 }


 public function destroy($id)
 {
     $product= Product::find($id);
     $product->delete();
     return redirect::route('products.index');
 }

}
