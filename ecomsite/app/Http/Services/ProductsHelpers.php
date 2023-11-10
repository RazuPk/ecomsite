<?php

namespace App\Http\Services;

use App\Models\Categories;
use App\Models\Products;
use App\Models\SubCategories;

class ProductsHelpers
{
    public function index()
    {
        return view('admin.allproducts')->with('products', Products::latest()->paginate(10));
    }

    public function addProduct()
    {
        return view('admin.addproduct')->with('categories', Categories::latest()->get())->with('subcategories', SubCategories::latest()->get());
    }

    public function fetchSubCategory($id)
    {
        $items = SubCategories::where('category_id', $id)->get();
        foreach ($items as $item) {
            $output[] = '<option value="' . $item->id . '">' . $item->subcategory_name . '</option>';
        }
        return response()->json($output);
    }

    public function storeProduct($request)
    {
        $image = $request->file('product_img');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'), $image_name);
        $image_url = 'upload/' . $image_name;

        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;
        $category_name = Categories::where('id', $category_id)->value('category_name');
        $subcategory_name = SubCategories::where('id', $subcategory_id)->value('subcategory_name');

        Products::insert([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'subcategory_id' => $request->subcategory_id,
            'subcategory_name' => $subcategory_name,
            'product_img' => $image_url,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name)),
        ]);

        Categories::where('id', $category_id)->increment('product_count', 1);
        SubCategories::where('id', $subcategory_id)->increment('product_count', 1);

        return redirect()->route('allproducts')->with('message', 'Products Added Successfully!');
    }

    public function editPhoto($id)
    {
        return view('admin.editphoto')->with('productinfo', Products::findOrFail($id));
    }
    public function updatePhoto($request)
    {
        $product_id = $request->product_id;
        $image = $request->file('product_img');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'), $image_name);
        $image_url = 'upload/' . $image_name;

        Products::where('id', $product_id)->update([
            'product_img' => $image_url,
        ]);

        return redirect()->route('allproducts')->with('message', 'Product Image Updated Successfully!');
    }

    public function editProduct($id)
    {
        return view('admin.editproduct')->with('productinfo', Products::findOrFail($id));
    }
    public function updateProduct($request)
    {
        $product_id = $request->product_id;

        Products::where('id', $product_id)->update([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name)),
        ]);

        return redirect()->route('allproducts')->with('message', 'Products Updated Successfully!');
    }
    public function destroyProduct($id)
    {
        $category_id = Products::where('id', $id)->value('category_id');
        $subcategory_id = Products::where('id', $id)->value('subcategory_id');

        Products::findOrFail($id)->delete();

        Categories::where('id', $category_id)->decrement('product_count', 1);
        SubCategories::where('id', $subcategory_id)->decrement('product_count', 1);

        return redirect()->route('allproducts')->with('message', 'Product Deleted Successfully!');
    }
}
