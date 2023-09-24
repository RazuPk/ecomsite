<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function Index()
    {
        $orders_info = Orders::where('status', 1)->latest()->paginate(10);
        return view('admin.pendingorder', compact('orders_info'));
    }

    public function UpdateOrderStatus($id)
    {
        Orders::where('id', $id)->update([
            'status' => '0',
        ]);
        $orders_info = OrderDetails::where('order_id', $id)->get();
        foreach ($orders_info as $items) {
            Products::where('id', $items->product_id)->decrement('quantity', $items->quantity);
        }

        return redirect()->route('completeorder')->with('message', 'Order Approved Successfully!');
    }

    public function CancelCompleteOrder($id)
    {
        Orders::where('id', $id)->update([
            'status' => '2',
        ]);
        $orders_info = OrderDetails::where('order_id', $id)->get();
        foreach ($orders_info as $items) {
            Products::where('id', $items->product_id)->increment('quantity', $items->quantity);
        }

        return Redirect()->route('cancelorder')->with('message', 'Order Cancelled Successfully!');
    }

    public function PendingOrderStatus($id)
    {
        Orders::where('id', $id)->update([
            'status' => '1',
        ]);

        return redirect()->route('pendingorder')->with('message', 'Order Status Updated Successfully!');
    }

    public function CompleteOrder()
    {
        $orders_info = Orders::where('status', 0)->latest()->paginate(10);
        return view('admin.completeorder', compact('orders_info'));
    }

    public function CancelOrderStatus($id)
    {
        Orders::where('id', $id)->update([
            'status' => '2',
        ]);

        return redirect()->route('cancelorder')->with('message', 'Order Cancelled Successfully!');
    }

    public function CancelOrder()
    {
        $orders_info = Orders::where('status', 2)->latest()->paginate(10);
        return view('admin.cancelorder', compact('orders_info'));
    }

    public function DeleteOrder($id)
    {
        OrderDetails::where('order_id', $id)->delete();
        Orders::where('id', $id)->delete();

        return redirect()->route('cancelorder')->with('message', 'Order Permanently deleted successfully!');
    }
}
