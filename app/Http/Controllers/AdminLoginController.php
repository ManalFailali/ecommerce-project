<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view("admin.login");
    }
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->intended('admin');
        }
        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'loginUsername' => 'Invalid username or password.',
        ]);
    }
    public function logout()
    {
    Auth::logout();
    return redirect('admin/login');
    }
}
