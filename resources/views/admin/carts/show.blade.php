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
                    <h1 style="color:black">Category List</h1>
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
                        <div class="input-group input-group" style="width: 250px;">
                            <div class="input-group-append">
                                <a  class="btn btn-secondary float-end" href="{{route('category.create')}}">
                                   create Category
                                      </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0 text-center">
<div class="container">
    <h1>Cart Item Details</h1>
    <p><strong>User:</strong> {{ $cart->user->name }}</p>
    <p><strong>Product:</strong> {{ $cart->product->name }}</p>
    <p><strong>Quantity:</strong> {{ $cart->quantity }}</p>
    <a href="{{ route('admin.carts.index') }}" class="btn btn-secondary">Back</a>
</div>
