<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categories;
use App\models\Product;

class AdminCategoriesController extends Controller
{
    public function index(){
        $categories=Categories::all();
        $categories=Categories::paginate(6);
        return view('admin.categories')->with('categories',$categories);
    }
    public function add_category(){
        return view('admin.add-categorry');
    }
    public function Upload_category(Request $request)
    {
    $category =new Categories;
    $category->title =$request->category_title;
    $category->description =$request->category_description;
    if($request->file('category_image')){
        $file= $request->file('category_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(('assets/img'), $filename);
        $category['image']= 'assets/img/'.$filename;
    }
    $category->save();
    return redirect('admin/categories');
    }
    public function delete_category( $id){
           // Find the category by ID
            $category= Categories::find($id);
            if($category) {
            // Delete the image file if it exists
                if($category->image && file_exists($category->image)) {
                    unlink($category->image);
                }
            // Delete the category from the database
                $category->delete();
            }
            return redirect()->back();
    }
    public function edit_category($id){
        $category = Categories::find($id);
        return view('admin.edit-category')->with('category',$category);
    }
    public function update_category(Request $request)
    {
        // Find the category by ID
        $category = Categories::find($request->category_id);
        $imagePath = $category->image;
        // Check if a new image is uploaded
        if ($request->hasFile('category_image')) {
            // Get the old image path
            $oldImage = $category->image;
            // Delete the old image if it exists
            if ($oldImage && file_exists($oldImage)) {
                unlink($oldImage);
            }
            // Store the new image and get its filename
            $image = $request->file('category_image');
            $imageName = date('YmdHi').$image->getClientOriginalName();
            $image->move('assets/img/', $imageName);
            // Set the new image path
            $imagePath = 'assets/img/'.$imageName;
        }
        // Update category with new data
        $category->update([
            'title' => $request->category_title,
            'description' => $request->category_description,
            'image' => $imagePath
        ]);
        // Redirect to the categories page
        return redirect('admin/categories');
    }
}
