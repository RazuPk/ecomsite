<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id, $slug)
    {
        $category = Categories::findOrFail($id);
        $products = Products::where('category_id', $id)->latest()->get();
        return view('users_template.category', compact('category', 'products'));
    }

    public function ProductDetails($id, $slug)
    {
        $products = Products::findOrFail($id);
        $subcategory_id = Products::where('id', $id)->value('subcategory_id');
        $relatedproducts = Products::where('subcategory_id', $subcategory_id)->latest()->get();
        return view('users_template.productdetails', compact('products', 'relatedproducts'));
    }

    public function AddToCart()
    {
        return view('users_template.addtocart');
    }

    public function Checkout()
    {
        return view('users_template.checkout');
    }

    public function UserProfile()
    {
        return view('users_template.userprofile');
    }

    public function PendingOrders()
    {
        return view('users_template.pendingorders');
    }

    public function History()
    {
        return view('users_template.history');
    }

    public function BestSellers()
    {
        return view('users_template.bestsellers');
    }

    public function NewRelease()
    {
        return view('users_template.newrelease');
    }

    public function TodaysDeals()
    {
        return view('users_template.todaysdeals');
    }
    public function CustomerService()
    {
        return view('users_template.customerservice');
    }
}
