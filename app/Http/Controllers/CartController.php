<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;
    public function index (Request $request,$id)
    {
       $this->product=Product::find($id);
       Cart::add([
         'id'          =>$this->product->id,
         'name'        =>$this->product->name,
         'price'       =>$this->product->selling_price,
         'quantity'    => $request->qty,
         'attributes'  =>[
             'image'   =>$this->product->image
         ],
       ]);
       return redirect('/show-cart');
    }
    public function show()
    {
        return view('website.cart.show',['products'=>Cart::getContent()]);
    }
    public function remove($id)
    {
       Cart::remove($id);
        return redirect()->back()->with('message', 'Cart product info remove successfully');
    }
    public function update(Request $request,$id)
    {
        return $request->all();
        Cart::update($id,[
            'quantity'=>[
                'relative'=>false,
                'value'=>$request->qty,
            ]
        ]);
        return redirect()->back()->with('message', 'Cart product info update  successfully');

    }
}
