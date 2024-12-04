<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.links')
    <style>
        /* Allow description text to wrap and show more lines */
        .table td, .table th {
            vertical-align: middle;
        }

        .table td.description {
            white-space: normal; /* Allow text to wrap */
            word-wrap: break-word; /* Break the long words onto new lines */
            max-width: 300px; /* Optional: limit the width for better alignment */
        }

        /* Add tooltip for long descriptions */
        .description-tooltip {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
        }

        .description-tooltip:hover {
            text-overflow: unset;
            white-space: normal;
            background-color: #f8f9fa;
            padding: 5px;
            border-radius: 5px;
        }

        /* Adjust column width */
        .table th, .table td {
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')
    @include('admin.layouts.links')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1 style="color:black">Product List</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-secondary" href="{{ route('product.create') }}">Create Product</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td class="description">
                                            <span class="description-tooltip" data-toggle="tooltip" data-placement="top" title="{{ $product->description }}">
                                                {{ Str::limit($product->description, 50) }} <!-- Limit text length -->
                                            </span>
                                        </td>
                                        <td>{{ $product->category->catName }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td><img src="{{ asset('storage/Products/' . $product->image_url) }}" class="img-thumbnail" width="50"></td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function() {
            // Enable Bootstrap tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>
