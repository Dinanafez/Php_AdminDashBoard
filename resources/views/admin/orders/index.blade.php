<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h1 style="color:black">Product List</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card d-flex align-items-center justify-content-center" style="min-height: 400px;">
                <div class="card-header w-100">
                    <div class="card-tools">
                    <section class="content">
    
                        <div class="input-group input-group" style="width: 250px;">
                            <div class="input-group-append">
                                <a  class="btn btn-secondary float-end" href="{{route('orders.create')}}">
                                   create Product
                                      </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover text-nowrap mx-auto" style="width: 80%;">
                        <thead>

   
  
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.layouts.footer')
</html>
