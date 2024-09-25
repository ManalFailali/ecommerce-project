<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categories;
use App\models\Product;
use App\models\User;

class AdminController extends Controller
{
    public function index(){
        $admin=User::all();
        return view('admin.index')->with('admin', $admin);
    }
};

