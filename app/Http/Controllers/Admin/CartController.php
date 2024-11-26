<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with(['user', 'product'])->paginate(10);
        return view('admin.carts.index', compact('carts'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('admin.carts.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Cart::create($request->all());
        return redirect()->route('carts.index')->with('success', 'Cart item created successfully.');
    }

    public function show(Cart $cart)
    {
        return view('admin.carts.show', compact('cart'));
    }

    public function edit(Cart $cart)
    {
        $users = User::all();
        $products = Product::all();
        return view('carts.edit', compact('cart', 'users', 'products'));
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart->update($request->all());
        return redirect()->route('carts.index')->with('success', 'Cart item updated successfully.');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with('success', 'Cart item deleted successfully.');
    }
}
