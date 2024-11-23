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
                    <h1 style="color:black">Create Copoun</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
	@if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
    <section class="content w-75 mx-auto px-auto">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card" style="background-color:#A49393">
                <div class="card-body">
                    <form action="{{ route('copoun.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Name Input -->
                            <div class="col-12 form-group ">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control w-100" placeholder="Name" value="{{old('name')}}">
                            </div>
                            <!-- Description Input -->
                            <div class="col-12 form-group ">
                                <label for="description">discount</label>
                                <input type="text" name="discount" id="discount" class="form-control w-100" placeholder="Description" value="{{old('description')}}">
                            </div>
							<div class="col-12 form-group ">
                                <label for="description">expiry_date</label>
                                <input type="date" name="expiry_date" id="expiry_date" class="form-control w-100" placeholder="Category" value="{{old('category_id')}}">
								
                            </div>
							
                        <!-- Submit Button -->
                        <div class="col-auto text-center">
                            <button class="btn bg-secondary text-white">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.layouts.footer')
</html>
