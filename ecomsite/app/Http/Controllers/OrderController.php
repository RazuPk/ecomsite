<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderHelpers;

class OrderController extends Controller
{
    public function Index()
    {
        return (new OrderHelpers())->Index();
    }

    public function UpdateOrderStatus($id)
    {
        return (new OrderHelpers())->UpdateOrderStatus($id);
    }

    public function CancelCompleteOrder($id)
    {
        return (new OrderHelpers())->CancelCompleteOrder($id);
    }

    public function PendingOrderStatus($id)
    {
        return (new OrderHelpers())->PendingOrderStatus($id);
    }

    public function CompleteOrder()
    {
        return (new OrderHelpers())->CompleteOrder();
    }

    public function CancelOrderStatus($id)
    {
        return (new OrderHelpers())->CancelOrderStatus($id);
    }

    public function CancelOrder()
    {
        return (new OrderHelpers())->CancelOrder();
    }

    public function DeleteOrder($id)
    {
        return (new OrderHelpers())->DestroyOrder($id);
    }
}
