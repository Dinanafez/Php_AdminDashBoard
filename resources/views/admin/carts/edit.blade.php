<html lang="en">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

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
    <h1>Edit Cart Item</h1>
    <form action="{{ route('admin.carts.update', $cart->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $cart->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ $cart->product_id == $product->id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $cart->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.carts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

