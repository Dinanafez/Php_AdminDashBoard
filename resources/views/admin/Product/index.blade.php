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
                        <div class="input-group input-group" style="width: 250px;">
                            <div class="input-group-append">
                                <a  class="btn btn-secondary float-end" href="{{route('product.create')}}">
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
                                <th width="60">ID</th>
                                <th width="80">Product Name</th>
                                <th>Product Description</th>
                                <th>Product Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category->catName }}</td>
                                <td>{{ $product->price }}</td>

                                <!-- <td><img src="{{ asset('storage/Products/$product->image_url')}}" class="img-thumbnail" width="50"></td> -->
								<td><img src="{{ asset('storage/Products/' . $product->image_url) }}" class="img-thumbnail" width="50"></td>

                                <td>{{ $product->quantity }}</td>
                                <td>
									<a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-warning">Edit</a>
									<form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post" id="delete_form_{{ $product->id }}" class="d-inline">
    @csrf
    @method('delete')
    <a href="javascript:document.getElementById('delete_form_{{ $product->id }}').submit();" class="btn btn-sm btn-danger">Delete</a>
</form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div> c
<!-- Footer -->
@include('admin.layouts.footer')

</body>
</html>
