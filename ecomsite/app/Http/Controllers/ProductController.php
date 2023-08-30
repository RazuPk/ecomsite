<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        $products = Products::latest()->get();
        return view('admin.allproducts', compact('products'));
    }
    public function AddProduct(){
        $categories = Categories::latest()->get();
        $subcategories = SubCategories::latest()->get();
        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request){
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('product_img');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$image_name);
        $image_url = 'upload/'.$image_name;

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
            'slug' => strtolower(str_replace(' ','-', $request->product_name)),
        ]);

        Categories::where('id', $category_id)->increment('product_count',1);
        SubCategories::where('id', $subcategory_id)->increment('product_count',1);

        return redirect()->route('allproducts')->with('message', 'Products Added Successfully!');
    }

    public function EditPhoto($id){
        $productinfo = Products::findOrFail($id);

        return view('admin.editphoto', compact('productinfo'));
    }
    public function EditProduct($id){
        $productinfo = Products::findOrFail($id);

        return view('admin.editproduct', compact('productinfo'));
    }

    public function UpdateProduct(Request $request){
        $product_id = $request->product_id;
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
        ]);

        Products::where('id', $product_id)->update([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ','-', $request->product_name)),
        ]);

        return redirect()->route('allproducts')->with('message', 'Products Updated Successfully!');
    }

    public function DeleteProduct($id){
        $category_id = Products::where('id', $id)->value('category_id');
        $subcategory_id = Products::where('id', $id)->value('subcategory_id');

        Products::findOrFail($id)->delete();

        Categories::where('id', $category_id)->decrement('product_count',1);
        SubCategories::where('id', $subcategory_id)->decrement('product_count',1);

        return redirect()->route('allproducts')->with('message', 'Product Deleted Successfully!');
    }
}
