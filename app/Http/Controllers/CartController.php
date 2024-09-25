<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\ProductController;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index() {
        // Get the cart from session
        $cart = session()->get('cart', []);
        return view('cart', ['cart' => $cart]);
    }
    public function addProductToCart(Request $request){
        // Find the product by ID or fail if not found
        $product = Product::findOrFail($request->product_id);
        // Get the current cart from session or initialize an empty array
        $cart = session()->get('cart', []);
        // If product already exists in the cart, update the quantity
        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] += $request->quantity;
        } else {
           // Add the product to the cart if not present
            $cart[$request->product_id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $product->price,
                "image"=> explode('|', $product->images)[0]
            ];
        }
        // Update the cart session
        session()->put('cart', $cart);
        return redirect()->back();
    }
    public function deleteCart($id){
        // Get the cart from session
        $cart = session()->get('cart', []);
        // If the product exists in the cart, remove it
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);  // Update the session
        }
        return redirect()->back();
    }
    public function CheckOut(){
        $cart = session()->get('cart', []);
        return view('check-out',['cart' => $cart]);
    }
}
