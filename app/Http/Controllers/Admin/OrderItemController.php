<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::with(['order', 'product'])->get();
        return view('admin.order_items.index', compact('orderItems'));
    }

    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.order_items.create', compact('orders', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        OrderItem::create($validated);

        return redirect()->route('admin.order_items.index')->with('success', 'Order Item created successfully!');
    }

    public function edit(OrderItem $orderItem)
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.order_items.edit', compact('orderItem', 'orders', 'products'));
    }
    public function show(OrderItem $orderItem)
    {
        return view('admin.order_items.show', compact('orderItem'));
    }
    
    public function update(Request $request, OrderItem $orderItem)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $orderItem->update($validated);

        return redirect()->route('admin.order_items.index')->with('success', 'Order Item updated successfully!');
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('admin.order_items.index')->with('success', 'Order Item deleted successfully!');
    }

    public function trashed()
    {
        $trashedItems = OrderItem::onlyTrashed()->with(['order', 'product'])->get();
        return view('admin.order_items.trashed', compact('trashedItems'));
    }

    public function restore($id)
    {
        $orderItem = OrderItem::onlyTrashed()->findOrFail($id);
        $orderItem->restore();

        return redirect()->route('admin.order_items.trashed')->with('success', 'Order Item restored successfully!');
    }
}

