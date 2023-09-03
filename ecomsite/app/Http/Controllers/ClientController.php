<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function Index()
    {
        $user_id = Auth::id();
        $cart_items = Carts::where('user_id', $user_id)->get();
        return view('users_template.viewcart', compact('cart_items'));
    }

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

    public function AddToCart(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->product_id;
        $price = Products::where('id', $product_id)->value('price');
        $result = Carts::where([
            ['user_id', $user_id],
            ['product_id', $product_id],
        ])->count();
        if ($result > 0) {
            Carts::where('product_id', $product_id)->increment('quantity', $request->quantity);
        } else {
            Carts::insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'price' => $price,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('viewcart')->with('message', 'Product Add to Cart Successfully!');
    }

    public function MinusCartItem($id)
    {
        Carts::where('id', $id)->decrement('quantity', 1);

        return redirect()->route('viewcart')->with('message', 'Cart Item Updated Successfully!');
    }

    public function PlusCartItem($id)
    {
        Carts::where('id', $id)->increment('quantity', 1);

        return redirect()->route('viewcart')->with('message', 'Cart Item Updated Successfully!');
    }

    public function RemoveCartItem($id)
    {
        Carts::where('id', $id)->delete();

        return redirect()->route('viewcart')->with('message', 'Cart Item Deleted Successfully!');
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

    public function UserLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
