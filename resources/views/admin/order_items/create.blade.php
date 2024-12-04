<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@include('admin.layouts.links')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h1 style="color:black">Create Order</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 50%;">
                    <div class="card-header text-center">
                        <h3>Add Order Item</h3>
                    </div>
                    <div class="card-body">

    <form action="{{ route('order_items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="order_id">Order</label>
            <select name="order_id" id="order_id" class="form-control">
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}">Order #{{ $order->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('order_items.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

