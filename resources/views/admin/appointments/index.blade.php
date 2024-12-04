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
                    <h1 style="color:black"> Appoitment listList</h1>
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
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary">Create Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover text-nowrap mx-auto" style="width: 80%;">
                        <thead>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date & Time</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                    <td>{{ $appointment->appointment_date }} {{ $appointment->appointment_time }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>
                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    @include('admin.layouts.footer')

</div>
