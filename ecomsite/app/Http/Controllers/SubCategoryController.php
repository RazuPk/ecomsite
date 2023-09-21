<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function Index(){
        $subcategories = SubCategories::latest()->paginate(10);
        return view('admin.allsubcategory', compact('subcategories'));
    }
    public function AddSubCategory(){
        $categories = Categories::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }
    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
            'category_id' => 'required',
        ]);
        $category_name = Categories::where('id', $request->category_id)->value('category_name');
        SubCategories::insert([
            'subcategory_name' => $request->subcategory_name,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'slug' => strtolower(str_replace(' ','-', $request->subcategory_name)),
        ]);

        Categories::where('id', $request->category_id)->increment('subcategory_count',1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!');
    }

    public function EditSubCategory($id){
        $subcate_info = SubCategories::findOrFail($id);

        return view('admin.editsubcategory', compact('subcate_info'));
    }

    public function UpdateSubCategory(Request $request){
        $subcategory_id = $request->subcatid;
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
        ]);

        SubCategories::findOrFail($subcategory_id)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ','-', $request->subcategory_name)),
        ]);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Updated Successfully!');
    }

    public function DeleteSubCategory($id){
        $category_id = SubCategories::where('id', $id)->value('category_id');

        SubCategories::findOrFail($id)->delete();

        Categories::where('id', $category_id)->decrement('subcategory_count',1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Deleted Successfully!');
    }
}
