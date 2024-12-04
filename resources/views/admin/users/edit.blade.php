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
                    <h1>Edit User</h1>
                    </div>
                    <div class="card-body">


   

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control">{{ $user->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>

