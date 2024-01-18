<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\category\Category;
use App\Models\product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //get all products
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('admin.products.allProducts', compact('products', 'category'));
    }

    // get add product page
    public function getAddProduct()
    {
        $category = Category::all();
        $products = Product::all();
        return view('admin.products.addProducts', compact('category'));
    }

    // create new product
    public function store(Request $request)
    {

        // validation for products data
        $request->validate([
            'name' => "required|string",
            'price' => 'required',
            'image_file' => 'required|mimes:png,jpg,jpeg',
            'menu_type' => 'required|string',
            'category_id' => 'required|integer'
        ]);

        // get all products for validation
        $products = Product::all();

        if (count($products) >= 1) {
            foreach ($products as $data) {
                if ($data->name == $request->name && $data->category_id == $request->category_id) {
                    notify()->error("This Product: {$request->name} Already Exists!");
                    return redirect()->back();
                }
            }
        }

        // get the latest id and rearrange idx
        $latestProductId = $products->isEmpty() ? 0 : $products->max('id');
        $newProductId = $latestProductId + 1;

        $product = new Product();
        $product->id = $newProductId; // Assign the incremented ID
        $product->name = $request->name;
        $product->price = $request->price;
        $product->filter = $request->menu_type;
        $product->category_id = $request->category_id;

        // image upload
        $image_data = $request->file('image_file');
        $imageName = time() . $image_data->getClientOriginalName();
        $location = public_path('./uploads/products/img/');
        $image_data->move($location, $imageName);
        $product->image = $imageName;

        $product->save();

        notify()->success("Add Product: {$request->name}");
        return redirect()->back();
    }


    // delete category
    public function destroy($id)
    {
        $products = Product::find($id);
        $image_file_path = public_path('./uploads/products/img/' . $products->image);
        unlink($image_file_path);
        $products->delete();

        notify()->success('Delete Product :' . " " . $products->name . " ");
        return redirect()->back();
    }


    // get edit products
    public function getEditProducts($id)
    {

        // get all categories
        $category = Category::all();
        $products = Product::find($id);
        return view('admin.products.editProducts', compact('products', 'category'));
    }

    // edit products
    public function edit(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'price' => 'required',
            // 'image_file' => 'required|mimes:png,jpg,jpeg',
            'category_id' => 'required'
        ]);

        // get all products for validation
        $allProducts = Product::all();
        $products = Product::find($id);
        foreach ($allProducts as $data) {
            if ($data->name == $request->name && $data->id != $products->id) {
                notify()->error("This Product : " . " " . $request->name . " " . " Already Exist ! ");
            }
        }

        $products->name = $request->name;
        $products->price = $request->price;
        $products->category_id = $request->category_id;

        // image upload
        $old_image = $products->image;
        $image_data = $request->file('image_file');

        if ($image_data != null) {
            $imageName = time() . $image_data->getClientOriginalName();
            $location = public_path('./uploads/products/img/');
            $image_data->move($location, $imageName);
            unlink(public_path('/uploads/products/img/'.$old_image));
        } else {
            $imageName = $old_image;
        }

        $products->image = $imageName;
        $products->save();

        notify()->success('Edit Product :' . " " . $request->name . " ");
        return redirect()->back();
    }

    // delete all products
    public function deleteAllProducts(Request $request)
    {
        $category_id = $request->category;
        $products = Product::where('category_id', $category_id)->get();

        foreach ($products as $product) {
            // Unlink the image
            if (file_exists(public_path('/uploads/products/img/' . $product->image))) {
                unlink(public_path('/uploads/products/img/' . $product->image));
            }
        }

        // Delete the products
        Product::where('category_id', $category_id)->delete();

        notify()->success('Products and Images Deleted');
        return redirect()->back();;
    }
}
