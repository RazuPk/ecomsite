<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Products;
use App\Models\ShippingInfo;
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
        $item_count = Carts::where([
            ['user_id', $user_id],
            ['product_id', $product_id],
        ])->count();
        if ($item_count > 0) {
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

    public function DecrementCartItem($id)
    {
        Carts::where('id', $id)->decrement('quantity', 1);

        return redirect()->route('viewcart')->with('message', 'Cart Item Updated Successfully!');
    }

    public function IncrementCartItem($id)
    {
        Carts::where('id', $id)->increment('quantity', 1);

        return redirect()->route('viewcart')->with('message', 'Cart Item Updated Successfully!');
    }

    public function RemoveCartItem($id)
    {
        Carts::where('id', $id)->delete();

        return redirect()->route('viewcart')->with('message', 'Cart Item Deleted Successfully!');
    }

    public function ShippingInfo()
    {
        return view('users_template.shippingaddress');
    }

    public function StoreShippingInfo(Request $request)
    {
        $user_id = Auth::id();
        $request->validate([
            'mobile_no' => 'required',
            'shipping_address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);
        ShippingInfo::insert([
            'user_id' => $user_id,
            'mobile_no' => $request->mobile_no,
            'shipping_address' => $request->shipping_address,
            'city' => $request->city,
            'district' => $request->district,
        ]);

        return redirect()->route('checkout')->with('message', 'Your Order is being Processed...');
    }

    public function Checkout()
    {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $cart_items = Carts::where('user_id', $user_id)->get();
        $shipping_info = ShippingInfo::where('user_id', $user_id)->first();
        return view('users_template.checkout', compact('cart_items', 'user_name', 'shipping_info'));
    }

    public function PlaceOrder()
    {
        $user_id = Auth::id();
        $cart_items = Carts::where('user_id', $user_id)->get();
        $item_count = $cart_items->sum('quantity');
        $total_amt = 0;
        foreach ($cart_items as $cart) {
            $total_amt = $total_amt + ($cart->price * $cart->quantity);
        }
        $shipping_info = ShippingInfo::where('user_id', $user_id)->first();

        $created_at = date("Y-m-d H:i:s");
        $order_id = Orders::insertGetId([
            'user_id' => $user_id,
            'mobile_no' => $shipping_info->mobile_no,
            'shipping_address' => $shipping_info->shipping_address,
            'city' => $shipping_info->city,
            'district' => $shipping_info->district,
            'item_qty' => $item_count,
            'total_amt' => $total_amt,
            'created_at' => $created_at,
        ]);

        ShippingInfo::where('user_id', $user_id)->first()->delete();

        foreach ($cart_items as $items) {
            OrderDetails::insert([
                'user_id' => $user_id,
                'order_id' => $order_id,
                'product_id' => $items->product_id,
                'price' => $items->price,
                'quantity' => $items->quantity,
                'created_at' => $created_at,
            ]);
            $id = $items->id;
            Carts::findOrFail($id)->delete();
        }

        return redirect()->route('pendingorders')->with('message', 'Your Order Placed Successfully!');
    }

    public function UserProfile()
    {
        return view('users_template.userprofile');
    }

    public function PendingOrders()
    {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $orders_info = Orders::where('user_id', $user_id)->where('status', 1)->latest()->get();
        return view('users_template.pendingorders', compact('orders_info', 'user_name'));
    }

    public function History()
    {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $orders_info = Orders::where('user_id', $user_id)->where('status', 0)->latest()->get();
        return view('users_template.history', compact('orders_info', 'user_name'));
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
