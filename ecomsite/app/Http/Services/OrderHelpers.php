<?php

namespace App\Http\Services;

use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Products;

class OrderHelpers
{
    public static function index()
    {
        return view('admin.pendingorder')->with('orders_info', Orders::where('status', 1)->latest()->paginate(10));
    }
    public static function updateOrderStatus($id)
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
    public static function cancelCompleteOrder($id)
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
    public static function pendingOrderStatus($id)
    {
        Orders::where('id', $id)->update([
            'status' => '1',
        ]);

        return redirect()->route('pendingorder')->with('message', 'Order Status Updated Successfully!');
    }
    public static function completeOrder()
    {
        return view('admin.completeorder')->with('orders_info', Orders::where('status', 0)->latest()->paginate(10));
    }
    public static function cancelOrderStatus($id)
    {
        Orders::where('id', $id)->update([
            'status' => '2',
        ]);

        return redirect()->route('cancelorder')->with('message', 'Order Cancelled Successfully!');
    }
    public static function cancelOrder()
    {
        return view('admin.cancelorder')->with('orders_info', Orders::where('status', 2)->latest()->paginate(10));
    }
    public static function destroyOrder($id)
    {
        OrderDetails::where('order_id', $id)->delete();
        Orders::where('id', $id)->delete();

        return redirect()->route('cancelorder')->with('message', 'Order Permanently deleted successfully!');
    }
}
