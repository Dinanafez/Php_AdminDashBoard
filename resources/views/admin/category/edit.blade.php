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
                    <h1 style="color:black">Edit cpoun</h1>
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
                    <form action="{{ route('category.update', [($category->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Name Input -->
                            <div class="col-12 form-group ">
                                <label for="name">Name</label>
                                <input type="text" name="catName" id="name" class="form-control w-100" placeholder="Name" value="{{($category->catName)}}">
                            </div>
                            <!-- Description Input -->
                            <div class="col-12 form-group ">
                                <label for="description">Dicription</label>
                                <input type="text" name="catDescription" id="catDescription" class="form-control w-100" placeholder="Description" value="{{($category->catDescription)}}">
                            </div>
						
							
                        <!-- Submit Button -->
                        <div class="col-auto text-center">
                            <button class="btn bg-secondary text-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

</html>
