<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    public function index(){
        $categories=Categories::paginate(6);
        return view('categories')->with('categories',$categories);
    }
    public function ShowCategory($id){
        $category=Categories::find($id);
        $products=Product::where('category_id',$id)->get();
        return view('single-category')->with('category',$category)->with('products',$products);
    }
}
