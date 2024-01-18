<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\category\Category;
use App\Models\product\Product;
use Illuminate\Http\Request;

class userController extends Controller
{
    //get home page for user
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        // return view('home')->with(['products' => $porducts , 'catgory' => $category]);
        return view('home', compact('products', 'category'));
    }

    // function to get chef page
    public function getChef()
    {
        return view('user.chefs');
    }

    // function to get contact page
    public function getContact()
    {
        return view('user.contact');
    }

    public function getBookTable(){
        return view('user.bookTable');
    }

    // function to get one cat
    public function list($id)
    {

        $products = Product::where('category_id', $id)->get();
        $category = Category::all();
        return view('home', compact('products', 'category'));
    }
}
