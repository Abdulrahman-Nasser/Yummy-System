<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminAuthController extends Controller
{
    //get admin login page
    public function index()
    {
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|min:8|max:25|string'
        ]);


        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.home');

        } else {
            notify()->error('Authentication Failed Wrong Email or Password');
            return redirect()->back()->with(['error' => 'Wrong Email or Password']);
        }
    }
}
