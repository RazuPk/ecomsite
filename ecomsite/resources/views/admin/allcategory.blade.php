@extends('admin.layouts.template')
@section('page-title')
    All Category | EcomSite
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h5>
        <div class="card">
            <h5 class="card-header">Available Category Information</h5>
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
                            <th>Category Name</th>
                            <th>Sub-Category</th>
                            <th>Products</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->subcategory_count }}</td>
                                <td>{{ $category->product_count }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="{{ route('editcategory', $category->id) }}" class="btn btn-primary btn-sm"><i class='bx bx-edit'></i></a>
                                    <a href="{{ route('deletecategory', $category->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete ?')"><i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex mt-2 p-3">
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
