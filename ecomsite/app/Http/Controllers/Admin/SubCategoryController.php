<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function Index(){
        $subcategories = SubCategory::latest()->get();
        return view('admin.allsubcategory', compact('subcategories'));
    }

    public function AddSubCategory(){
        $categories = Category::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
            'category_id' => 'required',
        ]);

        $category_id = $request->category_id;
        $category_name = Category::where('id', $category_id)->value('category_name');

        SubCategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'category_id' => $category_id,
            'category_name' => $category_name,
            'slug' => strtolower(str_replace(' ','-', $request->subcategory_name))
        ]);
        Category::where('id', $category_id)->increment('subcategory_count',1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!');
    }

    public function EditSubCategory($id){
        $subcate_info = SubCategory::findOrFail($id);

        return view('admin.editsubcategory', compact('subcate_info'));
    }

    public function UpdateSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories'
        ]);

        $subcategory_id = $request->subcatid;

        SubCategory::findOrFail($subcategory_id)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name))
        ]);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Updated Successfully!');
    }
}
