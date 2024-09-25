<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(12);
        return view('products')->with('products', $products);
    }
    public function ShowProduct($id){
        $product=Product::find($id);
        $category=Categories::find($product->category_id);
        $products=Product::where('category_id',$product->category_id)
                        ->where('id', '!=', $product->id)
                        ->get()
                        ->take(3);
        return view('single-product', [
            'product' => $product,
            'products'=> $products,
            'category'=> $category,
        ]);
    }
}
