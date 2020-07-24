<?php

namespace App\Http\Controllers;


use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products')->with('products',$products);
    }


    public function add_cart(Request $request, $id)
    {
        $products = Product::findorfail($id);
        return view('addcart')->with('products',$products);
    }
    public function added(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->image = $request->input('image');
        $products->added();

        return redirect ('/products');
    }
    public function delete($id)
    {
        $products = Product::findorfail($id);
        $products->delete();
        return redirect ('products')->with('status','your product is deleted from cart');

    }
    public function cart()
    {

        $products = Product::all();
        return view('cart')->with('products',$products);
    }

    public function create(){
        return view('register');
    }





}
