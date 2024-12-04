<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.links')
</head>

<body>
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h1 style="color:black">Orders Item</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card" style="min-height: 400px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-secondary" href="{{ route('order_items.create') }}">
                                Create Order Item
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0 text-center">
                        <table class="table table-hover text-nowrap mx-auto" style="width: 80%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderItems as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->order->id }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>
                                            <a href="{{ route('order_items.edit', $item) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('order_items.destroy', $item) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('admin.layouts.footer')
</body>

</html>
