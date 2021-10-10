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

      /*  $validateData = $request->validate([
            'p_name' => 'required|p_name',
            'p_code' => 'required|p_code',
            'p_desc' => 'required|p_desc',
            'p_category' => 'required|p_category',
            'p_price' => 'required|p_price',
            'p_quantity' => 'required|p_quantity',
            'p_stock_date' => 'required|p_stock_date',
            'p_rating' => 'required|p_rating',
            'p_purchased' => 'required|min:6|max:12'
        ]);*/

        $this->validate(
            $request,
            [
                'p_name' => 'required|min:4|max:20',
                'p_code' => 'required',
                'p_desc' => 'required',
                'p_category' => 'required',
                'p_price' => 'regex:/[0-9]/',
                'p_quantity' => 'required',
                'p_stock_date' => 'regex:/[0-9]/',
                'p_rating' => 'regex:/[0-9]/',
                'p_purchased' => 'required',
            ],
            [
                'p_name.required' => 'Product name is required!',
                'p_name.min' => 'Must contain 4 characters!',
                'p_name.max' => 'Must contain less than 20 characters!',
                'p_code.required' => 'Product Code is required!',
                'p_desc.required' => 'Product Description is required!',
                'p_category.required' => 'Product category is Required!',
                'p_price.regex' => 'Invalid formate! Enter valid Number!',
                'p_quantity.regex' => 'Product Quality is required!',
                'p_stock_date.regex' => 'Invalid formate! Enter valid Number!',
                'p_rating.regex' => 'Invalid formate! Enter valid Number!',
                'p_purchased.required' => 'Product Purchased is required!',
            ]
        );
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

        $request->session()->flash('product-added', 'Product Added!');
        return redirect::route('products.index');

       
    }

 //update

 public function update(Request $request,$id){

    $this->validate(
        $request,
        [
            'p_name' => 'required|min:4|max:20',
            'p_code' => 'required',
            'p_desc' => 'required',
            'p_category' => 'required',
            'p_price' => 'regex:/[0-9]/',
            'p_quantity' => 'required',
            'p_stock_date' => 'regex:/[0-9]/',
            'p_rating' => 'regex:/[0-9]/',
            'p_purchased' => 'required',
        ],
        [
            'p_name.required' => 'Product name is required!',
            'p_name.min' => 'Must contain 4 characters!',
            'p_name.max' => 'Must contain less than 20 characters!',
            'p_code.required' => 'Product Code is required!',
            'p_desc.required' => 'Product Description is required!',
            'p_category.required' => 'Product category is Required!',
            'p_price.regex' => 'Invalid formate! Enter valid Number!',
            'p_quantity.regex' => 'Product Quality is required!',
            'p_stock_date.regex' => 'Invalid formate! Enter valid Number!',
            'p_rating.regex' => 'Invalid formate! Enter valid Number!',
            'p_purchased.required' => 'Product Purchased is required!',
        ]
    );
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
    $request->session()->flash('product-update', 'Product Updated Successfully!');
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
