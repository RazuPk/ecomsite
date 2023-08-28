<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        $products = Product::latest()->get();
        return view('admin.allproducts', compact('products'));
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('admin.addproduct', compact('categories', 'subcategories'));
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
        $request->product_img->move(public_path('upload'), $image_name);
        $image_url = 'upload/'.$image_name;

        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;

        $category_name = Category::where('id', $category_id)->value('category_name');
        $subcategory_name = SubCategory::where('id', $subcategory_id)->value('subcategory_name');

        Product::insert([
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

        Category::where('id', $category_id)->increment('product_count',1);
        SubCategory::where('id', $subcategory_id)->increment('product_count',1);

        return redirect()->route('allproducts')->with('message', 'Product Added Successfully!');
    }

    public function EditPhoto($id){
        $productinfo=Product::findOrFail($id);

        return view('admin.editphoto', compact('productinfo'));
    }

    public function EditProduct($id){
        $products_info = Product::findOrFail($id);

        return view('admin.editproduct', compact('products_info'));
    }
}
