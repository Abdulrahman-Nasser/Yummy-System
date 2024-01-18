<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\category\Category;
use App\Models\product\Product;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //get all Categories
    public function index()
    {
        $category = Category::all();
        return view('admin.category.allCategories', compact('category'));
    }

    // get add category page
    public function getAddCategory()
    {
        return view('admin.category.addCategory');
    }

    // add new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        // check for if there is repeated names
        $category = Category::all();
        if (count($category) >= 1) {
            foreach ($category as $data) {
                if ($data->name == $request->name) {
                    notify()->error('This Category :  ' . $request->name . " " . 'Already Exist');
                    return redirect()->back();
                }
            }
        }

        // rearrange the id
        $CurrentId = $category->isEmpty() ? 0 : $category->max('id');
        $newId = $CurrentId + 1;

        // create new category
        $category = new Category();
        $category->id  = $newId;
        $category->name = $request->name;
        $category->save();
        notify()->success('Add New Category : ' . " " . " " . $request->name);
        return redirect()->back();
    }

    // destroy category
    public function destroy($id)
    {

        $category = Category::find($id);
        $productsCount = Product::count();

        if ($productsCount > 0) {
            notify()->error("Can not delete this Category: {$category->name}. We will redirecting you to products page to delete the products first.");
            $redirectDelay = 7; // Number of seconds delay before redirecting
            return redirect()->route('admin.allCategories')->with('redirectDelay', $redirectDelay);
        } else {
            $category->delete();
            notify()->success("Delete Category: {$category->name} successfully.");
            return redirect()->back();
        }
    }

    // destroy all categories
    public function destroyAll()
    {
        $category = Category::all();
        $productsCount = Product::count();

        if ($productsCount > 0) {
            notify()->error("Can not delete all categories We will redirecting you to products page to delete the products first.");
            $redirectDelay = 10; // Number of seconds delay before redirecting
            return redirect()->route('admin.allCategories')->with('redirectDelay', $redirectDelay);
        } else {
            foreach ($category as $data) {
                $data->delete();
            }

            notify()->success("Categories deleted successfully.");
            return redirect()->back();
        }
    }


    // get edit category page
    public function getEditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.editCategory', compact('category'));
    }

    // edit category
    public function edit(Request $request, $id)
    {

        $request->validate([
            "name" => "required|string",
        ]);
        $allCategories = Category::all();
        $category = Category::find($id);

        foreach ($allCategories as $data) {
            if ($data->name == $request->name && $data->id != $category->id) {
                notify()->error('This Category ' . $request->name . 'Already Exist');
                return redirect()->back();
            }
        }

        $category->name = $request->name;
        $category->save();

        notify()->success('Edit Category : ' . " " . $request->name . " success ");
        return redirect()->back();
    }
}
