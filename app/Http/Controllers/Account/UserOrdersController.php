<?php

namespace App\Http\Controllers\Account;

use App\Models\Order;

class UserOrdersController
{
    public function index()
    {
        $orders = Order::query()->where("user_id", "=", auth()->user()->id)->paginate("10");

        return view('account/orders/index', compact('orders'));
    }

    public function show(Order $order)
    {


        return view('account/orders/show', compact("order"));
    }

    public function cancel(Order $order)
    {
        $order->update(["status_id" => "4"]);

        return back()->with("success", "order canceled");
    }
}
