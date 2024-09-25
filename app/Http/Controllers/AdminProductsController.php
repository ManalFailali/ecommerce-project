<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categories;
use App\models\Product;

class AdminProductsController extends Controller
{
    public function index(){
        $category=Categories::all();
        $products=Product::all();
        $products = Product::paginate(6);
        return view('admin.products')->with('products',$products)->with('category',$category);
    }
    public function add_product(){
        $category=Categories::all();
        return view('admin.add-product')->with('category',$category);
    }

    public function upload_product(Request $request) {

    $product = new Product;
    $product->name = $request->product_name;
    $product->price = $request->product_price;
    $product->quantity = $request->quantity;
    $product->description = $request->product_description;
    $product->category_id = $request->category_id;

    // Handle multiple images upload
    $imagePaths = [];
    if ($request->hasfile('product_images')) {
        foreach ($request->file('product_images') as $image) {
            // Save each image in a directory and store its path
            $imageName = date('YmdHi'). $image->getClientOriginalName();
            $image->move('assets/img/', $imageName);
            $imagePaths[] = 'assets/img/' . $imageName;
        }
    }

    // Store the array of image paths as JSON in the database
    $product->images = implode("|",$imagePaths);

    // Save the product
    $product->save();

    return redirect('admin/products');
}

    public function delete_product($id)
   {
        $product = Product::find($id);
        if ($product) {
            $imagePaths = explode("|", $product->images);
            foreach ($imagePaths as $imagePath) {
                if (file_exists(($imagePath))) {
                    unlink($imagePath);
                }
            }
            $product->delete();
        }
        return redirect()->back();
    }
    public function edit_product($id)
    {
        $product = Product::find($id);
        return view('admin.edit-product')->with('products',$product);
    }
    public function update_product(Request $request)
    {
        $product = Product::find($request->product_id);
        if ($product) {
            // Step 1: Delete the old images if new images are uploaded
            if ($request->hasFile('product_images')) {
                $oldImagePaths = explode("|", $product->images);
                foreach ($oldImagePaths as $oldImagePath) {
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Delete the old image file from the server
                    }
                }
            }
            // Step 2: Upload and store new images if they exist
            $newImagePaths = $product->images; // Keep the old images by default
            if ($request->hasFile('product_images')) {
                $imageFiles = $request->file('product_images');
                $imagePathArray = [];
                foreach ($imageFiles as $image) {
                    $imageName = date('YmdHi') . $image->getClientOriginalName(); // Generate unique name
                    $image->move('assets/img/', $imageName); // Move to public directory
                    $imagePathArray[] = 'assets/img/' . $imageName; // Collect new paths
                }
                $newImagePaths = implode('|', $imagePathArray); // Concatenate new image paths
            }
            // Step 3: Update the product details, including the new image paths if uploaded
            $product->update([
                'name' => $request->product_name,
                'price' => $request->product_price,
                'quantity' => $request->quantity,
                'description' => $request->product_description,
                'category_id' => $request->category_id,
                'images' => $newImagePaths, // Update with the new image paths
            ]);
        }
        return redirect('admin/products');
    }

}
