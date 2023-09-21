<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
        $categories = Categories::latest()->paginate(10);
        return view('admin.allcategory', compact('categories'));
    }

    public function AddCategory(){
        return view('admin.addcategory');
    }

    public function StoreCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Categories::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }

    public function EditCategory($id){
        $category_info = Categories::findOrFail($id);

        return view('admin.editcategory', compact('category_info'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Categories::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Updated Successfully!');
    }

    public function DeleteCategory($id){
        Categories::findOrFail($id)->delete();

        return redirect()->route('allcategory')->with('message', 'Category Deleted Successfully!');
    }
}
