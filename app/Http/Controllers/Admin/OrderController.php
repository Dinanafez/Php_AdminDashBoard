<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'items')->get();
        return view('admin.orders.index', compact('orders'));
    }
    public function create()
{
    return view('admin.orders.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'required|exists:users,id',
        'total_price' => 'required|numeric|min:0',
        'status' => 'required|in:Pending,Completed,Cancelled',
    ]);

    Order::create($validated);

    return redirect()->route('admin.orders.index')->with('success', 'Order created successfully!');
}

    public function show(Order $order)
    {
        $order->load('user', 'items.product'); // Eager load relationships
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,Completed,Cancelled',
        ]);

        $order->update($validated);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully!');
    }
}
