@include('admin.layouts.links')
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
                    <h1 style="color:black">Edit Product</h1>
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
                    <form action="{{ route('product.update', [($product->id)]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Name Input -->
                            <div class="col-12 form-group ">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control w-100" placeholder="Name" value="{{($product->name)}}">
                            </div>
                            <!-- Description Input -->
                            <div class="col-12 form-group ">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control w-100" placeholder="Description" value="{{($product->description)}}">
                            </div>
							<div class="col-12 form-group ">
                                <label for="description">category</label>
                                <select name="category_id" id="category_id" class="form-select w-100">
    <option value="" disabled>Select a Category</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->catName }}
        </option>
    @endforeach
</select>

								</select>
                            </div>
							<div class="col-12 form-group ">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control w-100" placeholder="Price" value="{($product->price)}}">
                            </div>
							<div class="col-12 form-group ">
                                <label for="decs">Image</label>
                                <input type="file" name="image_url" id="image_url" class="form-control w-100" value="{{($product->image_url)}}">
                            </div>
							<div class="col-12 form-group">
                                <label for="quantity">quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control w-100" value="{{($product->quantity)}}">
                            </div>
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
