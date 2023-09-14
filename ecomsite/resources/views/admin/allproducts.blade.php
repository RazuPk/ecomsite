@extends('admin.layouts.template')
@section('page-title')
    All Products | EcomSite
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Products</h5>
        <div class="card">
            <h5 class="card-header">Available Products Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td class="text-center">
                                    <img src="{{ asset($product->product_img) }}" alt=""@style('width:70px; height:40px')>
                                    <br>
                                    <a href="{{ route('editphoto', $product->id) }}" class="btn btn-primary">Edit Photo</a>
                                </td>
                                <td>{{ number_format($product->price,2) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>
                                    <a href="{{ route('editproduct', $product->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('deleteproduct', $product->id) }}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
