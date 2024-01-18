<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //get home admin page
    public function index()
    {
        return view('admin.index');
    }




    // public function store(Request $request){
    //     $admin = new App\Models\Admin\Admin();
    //     $admin->name = 'ahmed hani';
    // $admin->email = 'ahmed@gmail.com';
    // $admin->password = bcrypt('12345678');
    // $admin->save();
    // }
}
