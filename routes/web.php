<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\ProductController;
use App\Http\controllers\CategoriesController;
use App\Http\controllers\CartController;
use App\Http\controllers\AdminCategoriesController;
use App\Http\controllers\AdminProductsController;
use App\Http\controllers\HomeController;
use App\Http\controllers\ContactController;
use App\Http\controllers\AdminLoginController;

use App\Models\User;

Route::get('/',[HomeController::class,'index']);
Route::post('/search',[HomeController::class,'search']);
Route::get('/admin/login', [AdminLoginController::class,'index'])->name('login');
Route::post('admin/login', [AdminLoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [AdminController::class,'index']);
    Route::get('admin/logout', [AdminLoginController::class, 'logout']);
    Route::get('admin/categories',[AdminCategoriesController::class,'index']);
    Route::get('admin/add_category',[AdminCategoriesController::class,'add_category']);
    Route::post('admin/categories/Upload_category',[AdminCategoriesController::class,'Upload_category']);
    Route::get('admin/categories/delete_category/{id}',[AdminCategoriesController::class,'delete_category']);
    Route::get('admin/categories/edit_category/{id}',[AdminCategoriesController::class, 'edit_category']);
    Route::post('admin/categories/update_category',[AdminCategoriesController::class,'update_category']);
    //admin/products
    Route::get('admin/products',[AdminProductsController::class,'index']);
    Route::get('admin/add_products',[AdminProductsController::class,'add_product']);
    Route::post('admin/products/upload_product',[AdminProductsController::class,'upload_product']);
    Route::get('admin/products/delete_product/{id}',[AdminProductsController::class,'delete_product']);
    Route::get('admin/products/edit_product/{id}',[AdminProductsController::class,'edit_product']);
    Route::post('admin/products/update_product',[AdminProductsController::class,'update_product']);
})->middleware('auth');;

///products
Route::get('/products',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'ShowProduct']);
///categories
Route::get('/categories',[CategoriesController::class,'index']);
Route::get('/catrgory/{id}',[CategoriesController::class,'ShowCategory']);
// cart
Route::get('/cart',[CartController::class,'index']);
Route::post('cart/add_product',[CartController::class,'addProductToCart']);
Route::get('cart/delete_cart/{id}',[CartController::class,'deleteCart']);

//check-out
Route::get('cart/check_out',[CartController::class,'CheckOut']);
//contact
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact/submit',[ContactController::class, 'submit']);

//User
Route::get('/users', function() {
    $users = User::all();
    return view('user', ['users' => $users]);
});
