<?php

namespace App\Http\Services;

use App\Models\Categories;
use App\Models\SubCategories;

class SubCategoriesHelpers
{
    public function index()
    {
        return view('admin.allsubcategory')->with('subcategories', SubCategories::latest()->paginate(10));
    }
    public function addSubCategory()
    {
        return view('admin.addsubcategory')->with('categories', Categories::latest()->get());
    }

    public function storeSubCategory($request)
    {
        $category_name = Categories::where('id', $request->category_id)->value('category_name');
        SubCategories::insert([
            'subcategory_name' => $request->subcategory_name,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        Categories::where('id', $request->category_id)->increment('subcategory_count', 1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!');
    }

    public function editSubCategory($id)
    {
        return view('admin.editsubcategory')->with('subcate_info', SubCategories::findOrFail($id));
    }
    public function updateSubCategory($request, $id)
    {

        SubCategories::findOrFail($id)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Updated Successfully!');
    }
    public function destroySubCategory($id)
    {
        $category_id = SubCategories::where('id', $id)->value('category_id');

        SubCategories::findOrFail($id)->delete();

        Categories::where('id', $category_id)->decrement('subcategory_count', 1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Deleted Successfully!');
    }
}
