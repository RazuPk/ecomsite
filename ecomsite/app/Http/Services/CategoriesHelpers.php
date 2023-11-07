<?php

namespace App\Http\Services;

use App\Models\Categories;

class CategoriesHelpers
{
    /**
     * Summary of storeCategory
     * @param mixed $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function addCategory()
    {
        return view('admin.addcategory');
    }
    public function getAllCategories()
    {
        return view('admin.allcategory')->with('categories', Categories::latest()->paginate(10));
    }
    public function storeCategory($request)
    {
        Categories::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }

    public function editCategory($id)
    {
        return view('admin.editcategory')->with('category_info', Categories::findOrFail($id));
    }
    public function updateCategory($request, $id)
    {
        Categories::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Updated Successfully!');
    }
    public function destroyCategory($id)
    {
        Categories::findOrFail($id)->delete();
        return redirect()->route('allcategory')->with('message', 'Category Deleted Successfully!');
    }
}
