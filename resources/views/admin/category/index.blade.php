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
                    <table class="table table-hover text-nowrap mx-auto" style="width: 80%;">
                        <thead>
                            <tr>
                                <th width="60"> Category ID</th>
                                <th width="80">Category Name</th>
                                <th>Category Description</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->catName }}</td>
                                <td>{{ $category->catDescription }}</td>
                              
                                <td>
                                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-warning"> <i class="fas fa-edit"></i> </a>
                                    <form action="{{ route('category.destroy', ['category' =>$category->id]) }}" method="post" id="delete_form_{{$category->id }}" class="d-inline">
    @csrf
    @method('delete')
    <a href="javascript:document.getElementById('delete_form_{{$category->id}}').submit();" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>
</form>                                </td>
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
</div>
<!-- Footer -->
@include('admin.layouts.footer')

</body>
</html>
