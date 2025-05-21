<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrder(Request $request) {
        $order = new Order();
        $order->id_account = $request->id_account;
        $order->nickname = $request->nickname;
        $order->item_info = $request->item_info;
        $order->payment_method = $request->payment_method;
        $order->pay_price = $request->pay_price;
        $order->pay_tax = $request->pay_tax;
        $order->pay_total = $request->pay_total;
        $order->save();

        return response()->json(['message' => 'order created successfully'], 200);
    }

    public function updateOrder($id, Request $request) {
        $order = Order::find($id);
        $order->id_account = $request->id_account;
        $order->nickname = $request->nickname;
        $order->item_info = $request->item_info;
        $order->payment_method = $request->payment_method;
        $order->pay_price = $request->pay_price;
        $order->pay_tax = $request->pay_tax;
        $order->pay_total = $request->pay_total;
        $order->save();

        return response()->json(['message' => 'order updated successfully'], 200);
    }

    public function getOrder($id) {
        $order = Order::where("order_id", "=", $id)->get();

        return response()->json(['orders' => $order], 200);
    }

}
