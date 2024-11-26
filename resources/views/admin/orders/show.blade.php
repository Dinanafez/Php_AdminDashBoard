@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>User:</strong> {{ $order->user->name }} ({{ $order->user->email }})</p>
    <p><strong>Total Price:</strong> ${{ number_format($order->total_price, 2) }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>
    <p><strong>Created At:</strong> {{ $order->created_at->format('Y-m-d') }}</p>

    <h3>Items:</h3>
    <ul>
        @foreach($order->items as $item)
            <li>{{ $item->product->name }} - ${{ number_format($item->price, 2) }} x {{ $item->quantity }}</li>
        @endforeach
    </ul>

    <h3>Payment:</h3>
    @if($order->payment)
        <p><strong>Payment Method:</strong> {{ $order->payment->method }}</p>
        <p><strong>Status:</strong> {{ $order->payment->status }}</p>
    @else
        <p>No payment information available.</p>
    @endif

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
</div>
@endsection
