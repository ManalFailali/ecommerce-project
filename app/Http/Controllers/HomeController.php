<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all()->take(3);
        $categories=Categories::all()->take(3);
    return view('home')->with('products',$products)->with('categories',$categories);
    }
    public function search(Request $request)
    {
        // Validate the search input
        $validated = $request->validate([
        'keywords' => 'required|string|max:255',
        ]);
        // Retrieve the search input from the form
        $keywords = $validated['keywords'];
        // Perform search query for products
        $products = \App\Models\Product::where('name', 'LIKE', "%{$keywords}%")
                ->orWhere('content', 'LIKE', "%{$keywords}%")
                ->get();
       // Perform search query for categories
        $categories = \App\Models\Categories::where('title', 'LIKE', "%{$keywords}%")
                ->orWhere('content', 'LIKE', "%{$keywords}%")
                ->get();
       // Return the view with both products and categories
        return view('search-results', compact('products', 'categories', 'keywords'));
    }
}
